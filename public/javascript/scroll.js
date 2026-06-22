/**
 * Menunggu seluruh HTML selesai dimuat sebelum menjalankan script
 */
document.addEventListener("DOMContentLoaded", function () {
    /**
     * Mengambil elemen container scroll kategori
     */
    const flashProductTrack = document.getElementById("flashProductTrack");

    /**
     * Mengambil elemen thumb (indikator posisi scroll)
     */
    const flashSaleThumb = document.getElementById("flashSaleThumb");

    /**
     * Mengambil tombol scroll ke kiri
     */
    const scrollLeftBtn = document.getElementById("scrollLeft");

    /**
     * Mengambil tombol scroll ke kanan
     */
    const scrollRightBtn = document.getElementById("scrollRight");

    /**
     * Jika elemen flashProductTrack tidak ditemukan,
     * maka hentikan script agar tidak error
     */
    if (!flashProductTrack) {
        return;
    }

    /**
     * =====================================================
     * FUNGSI: UPDATE POSISI THUMB (INDIKATOR SCROLL)
     * =====================================================
     */
    function updateThumbPosition() {
        /**
         * Jika thumb tidak ada, hentikan fungsi
         */
        if (!flashSaleThumb) {
            return;
        }

        /**
         * Mengambil posisi scroll saat ini (horizontal)
         */
        const scrollLeftValue = flashProductTrack.scrollLeft;

        /**
         * Menghitung jarak scroll maksimal yang bisa dilakukan
         */
        const maxScrollLeft =
            flashProductTrack.scrollWidth - flashProductTrack.clientWidth;

        /**
         * Lebar area track indikator (background jalur thumb)
         */
        const trackWidth = 58;

        /**
         * Lebar thumb (kotak kecil yang bergerak)
         */
        const thumbWidth = 24;

        /**
         * Jarak maksimal thumb bisa bergerak di track
         */
        const maxThumbMove = trackWidth - thumbWidth;

        /**
         * Menghitung posisi thumb berdasarkan rasio scroll
         * Jika maxScrollLeft > 0 maka dihitung proporsional
         * Jika tidak, posisi tetap 0
         */
        const thumbPosition =
            maxScrollLeft > 0
                ? (scrollLeftValue / maxScrollLeft) * maxThumbMove
                : 0;

        /**
         * Mengubah posisi CSS thumb (bergerak kiri/kanan)
         */
        flashSaleThumb.style.left = thumbPosition + "px";
    }

    /**
     * Menjalankan update thumb setiap user melakukan scroll
     */
    flashProductTrack.addEventListener("scroll", updateThumbPosition);

    /**
     * Menjalankan fungsi sekali saat halaman pertama kali dibuka
     */
    updateThumbPosition();

    /**
     * =====================================================
     * FITUR: TOMBOL SCROLL KIRI & KANAN
     * =====================================================
     */
    if (scrollLeftBtn && scrollRightBtn) {
        /**
         * Event ketika tombol kiri diklik
         */
        scrollLeftBtn.addEventListener("click", function () {
            /**
             * Menggeser scroll ke kiri sebesar 340px dengan animasi smooth
             */
            flashProductTrack.scrollBy({
                left: -340,
                behavior: "smooth",
            });
        });

        /**
         * Event ketika tombol kanan diklik
         */
        scrollRightBtn.addEventListener("click", function () {
            /**
             * Menggeser scroll ke kanan sebesar 340px dengan animasi smooth
             */
            flashProductTrack.scrollBy({
                left: 340,
                behavior: "smooth",
            });
        });
    }
});
