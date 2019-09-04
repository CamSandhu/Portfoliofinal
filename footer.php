<footer>
      <h3></h3>
    </footer>
    <?php wp_footer();?>
  </body>
  <script>
  $(document).ready(function() {
  $("nav ul li a").click(function() {
    $("li a")
      .parent()
      .css("border-bottom", "none");
    $(this)
      .parent()
      .css("border-bottom", "3px solid  #c62828");
  });
  $("nav li a").hover(
    function() {
      $(this).css("color", "#c62828");
    },
    function() {
      $(this).css("color", "#ffffff");
    }
  );
  $("#heading:last-child a:first-of-type").css("background-color", "#c62828");


  // function SmoothScroll(value, e) {
  //   var button = e.target;
  //   if (button.hash !== "") {
  //     event.preventDefault();
  //     var hash = button.hash;
  //   }
  //   $("html ,body").animate(
  //     {
  //       scrollTop: $(hash).offset().top
  //     },
  //     value,
  //     function() {
  //       window.location.hash = hash;
  //     }
  //   );
  // }
  // $(window).scroll();

  $(".container2 a").click(function(event){
    event.preventDefault();
  });
});

  </script>
</html>