<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>مركز الأجيال الصاعدة التعليمي</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!-- Template Stylesheet -->
  <link href="css/styles.css" rel="stylesheet">
  <!-- Favicon -->
  <link href="images/icon1.png" rel="icon">
</head>
<body>

<style>
    .subject-box {
    background-color: #fff;
    border-radius: 10px;
    padding: 1.5rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    text-align: center;
    margin-bottom: 1rem;
    transition: transform 0.3s ease;
  }
  
  .subject-box:hover {
    transform: translateY(-5px);
    background: #fb8c00; /* change to any color you want */
    color: #fff;
  }
  </style>



  <?php include 'header.php'; ?>

  <!-- ترويسة التدريب -->

  <section class="page-header text-white" style="background-image: url('images/carousel-2.jpg'); padding: 5rem 2rem 4rem;
    text-align: center;
    margin-top: 0px;
    min-height: 50vh;">
    <div class="container text-center">
    <h1 class="display-3 fw-bold" style="color: #fb873f; text-align: center;">المواد الدراسية للمرحلة الابتدائية</h1>

    
    </div>
  </section>


<main class="container" style="padding-top: 40px; padding-bottom: 40px;">


  <div class="row text-center">
    <div class="col-md-4">
      <div class="subject-box">
        <h4>اللغة العربية</h4>
        <p>تأسيس قوي في القراءة والكتابة والنحو.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="subject-box">
        <h4>الرياضيات</h4>
        <p>مفاهيم الحساب، الأعداد، الجمع والطرح.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="subject-box">
        <h4>العلوم</h4>
        <p>تعلم الطبيعة والكائنات الحية بطريقة ممتعة.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="subject-box">
        <h4>التربية الإسلامية</h4>
        <p>القرآن، الحديث، والسلوكيات الإسلامية.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="subject-box">
        <h4>اللغة الإنجليزية</h4>
        <p>أساسيات اللغة بطريقة بسيطة وتفاعلية.</p>
      </div>
    </div>
  </div>
</main>

 <!-- Login End -->

  <!-- الفوتر -->
  <?php include 'footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
