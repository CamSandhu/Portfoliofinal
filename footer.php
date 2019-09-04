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

  $(".container2 a:not(a < img)").click(function(event){
    event.preventDefault();
  });
});
  $(window).scroll(function(){
    var scroll= $(window).scrollTop();
    if(scroll=50){
      $('header').fadeOut(300)
    }
    else if(scroll>630){
      $('header').css("position", "fixed").fadeIn(300)
    }
  })
  </script>
</html>