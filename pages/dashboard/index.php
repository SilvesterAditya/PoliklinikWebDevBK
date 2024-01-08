<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Business Landing Page</title>
<style>
    body, h1, h2, p { margin: 0; padding: 0; }
    body { font-family: Arial, sans-serif; background-color: #f4f6f9; }
    .hero { background-color: #000000; color: white; padding: 50px 20px; text-align: center; }
    .hero h1 { margin-bottom: 20px; }
    .hero p { margin-bottom: 40px; }
    .section { padding: 50px 20px; }
    .section h2 { text-align: center; margin-bottom: 20px; }
    .services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
    .service-item { background-color: #000000; padding: 20px; text-align: center;color: #f9f9f9; border-radius: 10px; }
    .service-icon { font-size: 24px; margin-bottom: 10px; }
    .service-icon img {width: 70px; height: 70px; max-width: 100%; border-radius: 10px;}


    /* Styles for the about section with image on the right */
    .about-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .about-text {
        flex: 1;
        padding-right: 20px; /* Adds some space between the text and the image */
    }

    .about-image {
        flex-basis: 40%; /* Adjust the width of the image container */
        text-align: right; /* Aligns the image to the right */
    }

    .about-image img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin: auto; 
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .about-container {
            flex-direction: column;
            text-align: center;
        }

        .about-text {
            padding-right: 0;
        }

        .about-image {
            flex-basis: 100%;
            margin-top: 20px; /* Adds some space between the text and the image */
        }

    }
</style>
</head>
<body>

<div class="hero">
    <h1>Poliklinik Doa Ibu</h1>
    <p>Poliklinik yang selalu memberikan pelayanan terbaik untuk Anda</p>
</div>

<div class="section" id="about">
    <div class="about-container">
        <div class="about-text">
            <h2>Deskripsi</h2>
            <p>Sebuah poliklinik adalah fasilitas kesehatan yang menawarkan berbagai layanan rawat jalan tanpa memerlukan perawatan inap. Layanan ini biasanya mencakup diagnosis dan pengobatan untuk berbagai penyakit serta konsultasi medis yang disediakan oleh dokter umum dan spesialis di berbagai bidang seperti pediatri, ginekologi, dermatologi, oftalmologi, dan lain-lain.

Poliklinik sering berfungsi sebagai titik tengah antara praktik dokter umum dan rumah sakit, menawarkan layanan yang lebih spesialis daripada yang pertama tetapi perawatan yang kurang intensif dibandingkan yang terakhir. Poliklinik dirancang untuk lebih mudah diakses dan efisien, melayani pasien yang memerlukan perawatan spesialis tanpa kompleksitas penerimaan rumah sakit.

Fasilitas di poliklinik dapat mencakup laboratorium untuk pengujian medis, departemen pencitraan yang dilengkapi dengan mesin sinar-X dan ultrasound, dan terkadang bahkan ruang operasi untuk prosedur bedah minor yang dapat dilakukan secara rawat jalan.

Dalam banyak sistem kesehatan, poliklinik juga berfokus pada perawatan preventif, pendidikan kesehatan, dan kesehatan masyarakat. Mereka mungkin menyediakan vaksinasi, pemeriksaan kesehatan rutin, dan skrining untuk berbagai kondisi kesehatan. Dengan menyediakan spektrum layanan kesehatan yang luas di satu lokasi, poliklinik bertujuan untuk merampingkan perawatan pasien dan meningkatkan hasil kesehatan.</p>
        </div>
        <div class="about-image">
            <!-- Replace 'assets/images/hospital1.jpg' with the actual path to your image -->
            <img src="assets/images/hospital1.jpg" alt="About Us">
        </div>
    </div>
</div>

<div class="section" id="services">
    <h2>Pelayanan Yang Kami Sediakan</h2>
    <div class="services-grid">
        <div class="service-item">
            <div class="service-icon">
                <img src="assets/images/icon2.png" alt="dokter">
            </div>
            <h3>Dokter</h3>
            <p>Dokter berpengalaman untuk memberikan pelayanan terbaik.</p>
        </div>
        <div class="service-item">
            <div class="service-icon">
            <img src="assets/images/ambulance.png" alt="ambulance">
            </div>
            <h3>Ambulance</h3>
            <p>Pelayanan Ambulance 24 jam.</p>
        </div>
        <div class="service-item">
            <div class="service-icon">
            <img src="assets/images/konsultasi.png" alt="konsultasi">
            </div>
            <h3>Konsultasi</h3>
            <p>Kami memberikan pelayanan kosnultasi 24 jam</p>
        </div>
        <!-- Repeat for other services -->
    </div>
</div>

<!-- Continue with other sections as necessary -->

</body>
</html>
