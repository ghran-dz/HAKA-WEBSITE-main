<style>
    .color-box {
        border: 3px solid #FFFFFF66;
    }

    .color-box.active {
        border: 3px solid #FFFFFF !important
    }
</style>
<div class="w-full relative">
    <img id="car-image" src="" alt="image-color" class="w-full h-auto -ml-1" />
    <div class="absolute bottom-4 right-12 sm:bottom-8 sm:right-12 lg:bottom-14 lg:right-52">
        <div class="mt-auto">
            <div class="open-sans italic text-product uppercase mb-1 sm:mb-2 ml-1 text-xxs sm:text-xs lg:text-sm lg:mb-5">SELECT COLOR</div>
            <!-- Car Color Area -->
            <div id="color-boxes" class="flex justify-center items-center gap-1 sm:gap-2 lg:gap-5">
            </div>
        </div>
    </div>
</div>

<script>
    const getProductModelVariant = async () => {
        try {
            const BASE_URL = document.getElementById('body-contain').getAttribute('data-base-url')
            const response = await fetch(`${BASE_URL}/product-model?model=${decodeParams(model).toUpperCase()}`);
            const data = await response.json();
            if (data?.id) {
                const variants = data?.varian ?? []

                if (variants?.length > 0) {
                    const colorBoxesContainer = document.getElementById('color-boxes');
                    const carImage = document.getElementById('car-image');

                    variants.forEach((car, index) => {
                        const box = document.createElement('div');
                        box.classList.add('color-box', "w-5", "h-5", "rounded-lg", "sm:w-8", "sm:h-8", "lg:w-12", "lg:h-12");
                        box.style.backgroundColor = car.color;
                        box.dataset.id = car.id;
                        box.dataset.image = `${BASE_URL.replace('/api/v1','')}/${car.images}`;
                        box.dataset.alt = car.image_description

                        if (index === 0) {
                            box.classList.add('active');
                            carImage.src = `${BASE_URL.replace('/api/v1','')}/${car.images}`;
                            carImage.alt = car?.image_description ?? getImageFileName(`${BASE_URL.replace('/api/v1','')}/${car.images}`) ?? "";
                        }

                        colorBoxesContainer.appendChild(box);

                        box.addEventListener('click', function() {
                            document.querySelectorAll('.color-box').forEach(b => b.classList.remove('active'));
                            this.classList.add('active');
                            carImage.src = this.dataset.image;
                            carImage.alt = this.dataset.alt;
                        });
                    });
                }

            }
        } catch (error) {
            console.log(error);

        }

    }
    if (model) {
        getProductModelVariant()
    }
</script>