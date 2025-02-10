<div class="w-full max-w-screen-2xl mx-auto mb-10 bg-white px-6 py-6">
    <div class="flex flex-row gap-3 items-center  ">
        <span class="relative flex size-3">
            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"></span>
            <span class="relative inline-flex size-3 rounded-full bg-red-500"></span>
        </span>
        <h1 class="text-xl font-bold text-gray-700"> সর্বশেষ খবর </h1>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 py-6 ">
        <div class="flex flex-col gap-4">
            <h1 class="text-2xl md:text-3xl text-gray-600 font-bold my-4 truncate h-auto py-1">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের মৃত্যু </h1>

            <div class="relative w-full  md:h-96 h-64   bg-black bg-opacity-60 rounded overflow-hidden">

                <div id="thumbnailContainer" class="w-full h-full bg-cover bg-center rounded-lg"
                    style="background-image: url('https://img.youtube.com/vi/sHDmxMrCfCw/0.jpg');">

                    <div id="playButton"
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded">
                        <img src="{{ asset('image/play.png') }}"
                            class="h-12 w-12 rounded-full border-white border-2 cursor-pointer object-cover"
                            alt="Play Icon" onclick="playVideo()">
                    </div>
                </div>

                <div id="videoContainer" class="absolute inset-0 w-full h-full hidden">
                    <iframe id="videoFrame" class="w-full h-full rounded-lg" src="" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-2  rounded">
            <div class="flex justify-between items-center my-4 border-b-2">
                <h1 class="text-xl text-gray-600 font-bold my-3"> আরো দেখুন </h1>
                <form class="w-1/2 flex items-center">
                    <select class="block p-2 w-full rounded  text-sm text-gray-900 border ">
                        <option disabled selected>ক্যাটাগরি সেলেক্ট করুন</option>
                        <option value="latest">সর্বশেষ</option>
                        <option value="politics">রাজনীতি</option>
                        <option value="bangladesh">বাংলাদেশ</option>
                        <option value="crime">অপরাধ</option>
                        <option value="world">বিশ্ব</option>
                        <option value="trade">বাণিজ্য</option>
                        <option value="opinion">মতামত</option>
                        <option value="sports">খেলা</option>
                        <option value="entertainment">বিনোদন</option>
                        <option value="job">চাকরী</option>
                        <option value="lifestyle">জীবনযাপন</option>
                    </select>
                </form>
            </div>

            <div class="flex flex-col gap-4 border p-2 md:h-96 h-64 rounded overflow-y-scroll overflow-hidden relative">
                <div class="flex items-center gap-3">
                    <img src="https://images.dailyamardesh.com/original_images/ctg-1_zyttxec.jpg"
                        class="h-16 w-20 object-cover rounded-lg" />
                    <h1 class="text-gray-600 truncate">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের
                        মৃত্যু</h1>
                </div>
                <div class="flex items-center gap-3">
                    <img src="https://images.dailyamardesh.com/original_images/ctg-1_zyttxec.jpg"
                        class="h-16 w-20 object-cover rounded-lg" />
                    <h1 class="text-gray-600 truncate">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের
                        মৃত্যু</h1>
                </div>
                <div class="flex items-center gap-3">
                    <img src="https://images.dailyamardesh.com/original_images/ctg-1_zyttxec.jpg"
                        class="h-16 w-20 object-cover rounded-lg" />
                    <h1 class="text-gray-600 truncate">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের
                        মৃত্যু</h1>
                </div>
                <div class="flex items-center gap-3">
                    <img src="https://images.dailyamardesh.com/original_images/ctg-1_zyttxec.jpg"
                        class="h-16 w-20 object-cover rounded-lg" />
                    <h1 class="text-gray-600 truncate">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের
                        মৃত্যু</h1>
                </div>
                <div class="flex items-center gap-3">
                    <img src="https://images.dailyamardesh.com/original_images/ctg-1_zyttxec.jpg"
                        class="h-16 w-20 object-cover rounded-lg" />
                    <h1 class="text-gray-600 truncate">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের
                        মৃত্যু</h1>
                </div>
                <div class="flex items-center gap-3">
                    <img src="https://images.dailyamardesh.com/original_images/ctg-1_zyttxec.jpg"
                        class="h-16 w-20 object-cover rounded-lg" />
                    <h1 class="text-gray-600 truncate">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের
                        মৃত্যু</h1>
                </div>
                <div class="flex items-center gap-3">
                    <img src="https://images.dailyamardesh.com/original_images/ctg-1_zyttxec.jpg"
                        class="h-16 w-20 object-cover rounded-lg" />
                    <h1 class="text-gray-600 truncate">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের
                        মৃত্যু</h1>
                </div>
                <div class="flex items-center gap-3">
                    <img src="https://images.dailyamardesh.com/original_images/ctg-1_zyttxec.jpg"
                        class="h-16 w-20 object-cover rounded-lg" />
                    <h1 class="text-gray-600 truncate">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের
                        মৃত্যু</h1>
                </div>
                <div class="flex items-center gap-3">
                    <img src="https://images.dailyamardesh.com/original_images/ctg-1_zyttxec.jpg"
                        class="h-16 w-20 object-cover rounded-lg" />
                    <h1 class="text-gray-600 truncate">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের
                        মৃত্যু</h1>
                </div>
                <div class="flex items-center gap-3">
                    <img src="https://images.dailyamardesh.com/original_images/ctg-1_zyttxec.jpg"
                        class="h-16 w-20 object-cover rounded-lg" />
                    <h1 class="text-gray-600 truncate">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের
                        মৃত্যু</h1>
                </div>
                <div class="flex items-center gap-3">
                    <img src="https://images.dailyamardesh.com/original_images/ctg-1_zyttxec.jpg"
                        class="h-16 w-20 object-cover rounded-lg" />
                    <h1 class="text-gray-600 truncate">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের
                        মৃত্যু</h1>
                </div>
                <div class="flex items-center gap-3">
                    <img src="https://images.dailyamardesh.com/original_images/ctg-1_zyttxec.jpg"
                        class="h-16 w-20 object-cover rounded-lg" />
                    <h1 class="text-gray-600 truncate">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের
                        মৃত্যু</h1>
                </div>
                <div class="flex items-center gap-3">
                    <img src="https://images.dailyamardesh.com/original_images/ctg-1_zyttxec.jpg"
                        class="h-16 w-20 object-cover rounded-lg" />
                    <h1 class="text-gray-600 truncate">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের
                        মৃত্যু</h1>
                </div>
                <div class="flex items-center gap-3">
                    <img src="https://images.dailyamardesh.com/original_images/ctg-1_zyttxec.jpg"
                        class="h-16 w-20 object-cover rounded-lg" />
                    <h1 class="text-gray-600 truncate">চট্টগ্রামে অগ্নিদগ্ধ হয়ে দুই জনের
                        মৃত্যু</h1>
                </div>
                <div class="flex items-center gap-3 p-2 border rounded shadow sticky -bottom-2 bg-white left-0 w-full">
                    <input type="search" placeholder="এইখানে খুূঁজুন...."
                        class="px-4 py-2 rounded border-none bg-gray-100 text-gray-400 w-full">
                    <button type="submit" class="px-4 py-2 rounded border text-white bg-red-500 ">সাবমিট</button>

                </div>
            </div>
            <div>

            </div>
        </div>

    </div>

</div>



<script>
    function playVideo() {
        var thumbnailContainer = document.getElementById('thumbnailContainer');
        var playButton = document.getElementById('playButton');
        var videoContainer = document.getElementById('videoContainer');
        var videoFrame = document.getElementById('videoFrame');

        // Hide the thumbnail and play button
        thumbnailContainer.style.display = 'none';
        playButton.style.display = 'none';

        // Show the video container and load the video
        videoContainer.style.display = 'block';
        videoFrame.src = "https://www.youtube.com/embed/sHDmxMrCfCw?autoplay=1&rel=0";
    }
</script>
