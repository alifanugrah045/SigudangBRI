<footer class="py-4 bg-light mt-auto">
  <div class="container-fluid px-4">
    <div class="d-flex align-items-center justify-content-between small">
      <div class="text-muted">Copyright &copy; Your Website 2021</div>
      <div>
        <a href="#">Privacy Policy</a>
        &middot;
        <a href="#">Terms &amp; Conditions</a>
      </div>
    </div>
  </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>js/datatables-simple-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

<script>
  // sweet
  <?php
  if ($this->session->flashdata('message')) { ?>
  let isi = <?php echo json_encode($this->session->flashdata('message')) ?>;
    Swal.fire({
      title: 'Sukses!',
      text: isi,
      icon : 'success',
      confirmButtonColor: '#013161'
    })
  <?php } ?>

  <?php
  if ($this->session->flashdata('error')) { ?>
  let isi = <?php echo json_encode($this->session->flashdata('error')) ?>;
    Swal.fire({
      title: 'Gagal!',
      text: isi,
      icon : 'error'
    })
  <?php } ?>

// end sweet

// multiple

  $(document).ready(function() {
    // membatasi jumlah inputan
    var maxGroup = 10;

    //melakukan proses multiple input 
    $(".addMore").click(function() {
      if ($('body').find('.fieldGroup').length < maxGroup) {
        let fieldHTML = '<div class="form-group fieldGroup">' + $(".fieldGroupCopy").html() + '</div>';
        $('body').find('.fieldGroup:last').after(fieldHTML);
      } else {
        alert('Maximum ' + maxGroup + ' groups are allowed.');
      }
      // sumFieldGroup = document.querySelectorAll(".fieldGroup").length;
      // let countData = document.getElementById("countData");
      // countData.setAttribute("value", sumFieldGroup);
    });

    //remove fields group
    $("body").on("click", ".remove", function() {
      $(this).parents(".fieldGroup").remove();
      // console.log(document.querySelectorAll(".fieldGroup").length);
      // sumFieldGroup = document.querySelectorAll(".fieldGroup").length;
      // let countData = document.getElementById("countData");
      // countData.setAttribute("value", sumFieldGroup);
    });
  });


// end multiple


  $(document).ready(function() {
    // membatasi jumlah inputan
    var maxGroup = 10;

    //melakukan proses multiple input 
    $(".addMore1").click(function() {
      if ($('body').find('.fieldGroup1').length < maxGroup) {
        var fieldHTML = '<div class="form-group-1 fieldGroup1">' + $(".fieldGroupCopy1").html() + '</div>';
        $('body').find('.fieldGroup1:last').after(fieldHTML);
      } else {
        alert('Maximum ' + maxGroup + ' groups are allowed.');
      }
    });

    //remove fields group
    $("body").on("click", ".remove1", function() {
      $(this).parents(".fieldGroup1").remove();
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function(){
    flatpickr(document.getElementById('dari'),{});
    flatpickr(document.getElementById('sampai'),{});
  });
</script>

