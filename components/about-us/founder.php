<?php

$users = [
    [
        "name" => "Hariyadi Kaimuddin",
        "image" => "images/about-us/profil1.png",
        "position" => "(Chief Executive Officer)",
        "description" => "Profesional lulusan Teknik Industri ITB, merintis karir di bidang Marketing PT HM Sampoerna kemudian melanjutkan ke Kalla Group sebagai Direktur Kalla Toyota pada tahun 2007 sampai posisi Board of Director Kalla Group"
    ],
    [
        "name" => "Nanda Parulian Sinaga",
        "image" => "images/about-us/profil2.png",
        "position" => "(Chief Finance Officer)",
        "description" => "Profesional di bidang keuangan dengan pengalaman kerja 15 tahun di Lembaga Keuangan baik Dalam Negeri maupun Luar Negeri serta 15 tahun di Korporasi dalam pengelolaan keuangan"
    ],
]

?>
<div class="w-full relative">
    <img src="images/about-us/bg-green.png" alt="background about haka auto image" class="w-full h-96 sm:h-auto" />
    <div class="w-full absolute inset-0">
        <div class="w-full h-full flex flex-col justify-center items-center space-y-5 sm:space-y-10 lg:space-y-16 2xl:space-y-20">
            <div class="montserrat w-full text-lg text-title text-center font-bold sm:text-3xl">ABOUT HAKA AUTO</div>
            <div class="w-full lg:max-w-6xl lg:mx-auto lg:pr-10 2xl:max-w-7xl">
                <div class="grid grid-cols-1 gap-y-5 sm:grid-cols-2 sm:gap-y-3 sm:gap-x-5 lg:gap-x-14">
                    <?php foreach ($users as $key => $value) : ?>
                        <div key="<?= $value['name'] ?>" class="w-full flex justify-center items-start gap-x-2 sm:gap-x-0 sm:items-start lg:items-center">
                            <img src="<?= $value['image'] ?>" alt="<?= $value['name'] ?>" class="h-24 lg:h-48 2xl:h-64" />
                            <div class="w-3/4 sm:w-3/5 ">
                                <div class="text-xs text-title montserrat italic font-extrabold uppercase mb-1 sm:ml-2 sm:text-sm lg:text-lg lg:mb-2 2xl:text-2xl">
                                    <?= htmlspecialchars($value['name']) ?>
                                </div>
                                <div class="text-xs montserrat italic text-secondary font-light mb-1 sm:ml-2 lg:mb-5 2xl:text-base">
                                    <?= htmlspecialchars($value['position']) ?>
                                </div>
                                <p class="text-xs open-sans italic text-justify 2xl:text-base"><?= htmlspecialchars($value['description']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>