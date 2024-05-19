function showForm(role) {
    var imageSection = document.getElementById('imageSection');
    var studentForm = document.getElementById('studentForm');
    var staffForm = document.getElementById('staffForm');
  
    imageSection.style.transform = 'translateY(100%)';
    imageSection.style.transition = 'transform 0.5s ease-in-out';
  
    setTimeout(function () {
      imageSection.style.display = 'none';
      if (role === 'student') {
        studentForm.style.display = 'block';
        staffForm.style.display = 'none';
      } else if (role === 'staff') {
        studentForm.style.display = 'none';
        staffForm.style.display = 'block';
      }
    }, 500);
  }
  