<?php
$data = [
    "title" => "e-platform 3.0",
    "sub_title" => "Give full play to the advantages of intelligence, efficiency, safety, and aesthetics that electrification brings.",
]
?>
<div class="w-full relative">
    <img id="e-platform-image" src="" alt="e-platform-3.0" class="w-full object-cover object-center h-[48rem] sm:h-[32rem] lg:h-auto" />
    <div class="w-full absolute inset-0 p-5 lg:py-20">
        <div class="w-full mx-auto sm:max-w-2xl sm:px-5 lg:max-w-5xl">
            <div id="e-platform-title" class="montserrat text-white text-center text-lg tracking-tighter font-bold mb-1 lg:mb-2 uppercase sm:mb-3 lg:text-4xl"><?php echo htmlspecialchars($data['title']) ?? "" ?></div>
            <div id="e-platform-subtitle" class="open-sans text-white text-center text-xs font-light mb-1 lg:mb-16 italic uppercase sm:mb-3"><?php echo htmlspecialchars($data['sub_title']) ?? "" ?></div>
            <div class="w-full">
                <div id="e-platform-detail" class="grid grid-cols-2 gap-2 sm:gap-x-8 lg:gap-x-24"></div>
            </div>
        </div>
    </div>
</div>