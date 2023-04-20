</main>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="/static/vendor/apexcharts/apexcharts.min.js"></script>
<script src="/static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/static/vendor/chart.js/chart.umd.js"></script>
<script src="/static/vendor/echarts/echarts.min.js"></script>
<script src="/static/vendor/quill/quill.min.js"></script>
<script src="/static/vendor/simple-datatables/simple-datatables.js"></script>
<script src="/static/vendor/tinymce/tinymce.min.js"></script>
<script src="/static/vendor/php-email-form/validate.js"></script>


<script src="/static/js/main.js"></script>
<script>
      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);
      if(urlParams.get('err')){
        document.write("<div id='err' style='position:fixed;bottom:30px; right:30px;background-color:#FF0000;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('err')+"</div>")
      }
      setTimeout(()=>{
          document.getElementById("err").style.display="none"
      }, 3000)
      if(urlParams.get('msg')){
        document.write("<div id='msg' style='position:fixed;bottom:30px; right:30px;background-color:#4CAF50;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('msg')+"</div>")
      }
      setTimeout(()=>{
          document.getElementById("msg").style.display="none"
      }, 3000)
  </script>
</body>

</html>