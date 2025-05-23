<script>
  window.addEventListener('scroll', function () {
    const header = document.querySelector('.main-header');
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
</script>
<header class="main-header">
  <div class="container d-flex justify-content-between align-items-center">
    <a href="index.php"><img src="images/icon1.png" alt="Logo"></a>

    <nav class="d-none d-md-block">
      <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="index.php">الرئيسية</a></li>
        <li class="nav-item"><a class="nav-link" href="studingLevels.php">المراحل الدراسية</a></li>
        <li class="nav-item"><a class="nav-link" href="#">المعلمون</a></li>
        <li class="nav-item"><a class="nav-link" href="coursesSection.php">قسم التدريب</a></li>
        <li class="nav-item"><a class="nav-link" href="#">الطباعة والتدوير</a></li>
        <li class="nav-item"><a class="nav-link" href="#">تكنو أجيال</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">تسجيل الدخول</a></li>
        
      </ul>
    </nav>

    <div class="dropdown d-block d-md-none">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        القائمة
      </button>
      <ul class="dropdown-menu text-end">
        <li><a class="dropdown-item" href="index.php">الرئيسية</a></li>
        <li><a class="dropdown-item" href="studingLevels.php">المراحل الدراسية</a></li>
        <li><a class="dropdown-item" href="#">المعلمون</a></li>
        <li><a class="dropdown-item" href="coursesSection.php">قسم التدريب</a></li>
        <li><a class="dropdown-item" href="#">الطباعة والتدوير</a></li>
        <li><a class="dropdown-item" href="#">تكنو أجيال</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="login.php">تسجيل دخول</a></li>
        <li><a class="dropdown-item" href="sign_up.php"> انشاء حساب</a></li>
    
        
      </ul>
    </div>
  </div>
</header>