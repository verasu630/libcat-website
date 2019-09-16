$(function() {
  $(document).tooltip({
    position: { my: "left+15 center", at: "right center" }
  });
  $("#loan-date").datepicker({
    dateFormat: "yy-mm-dd",
    minDate: 0,
    maxDate: 0
  });
  $('#author_dob').datepicker({
    dateFormat: "yy-mm-dd",
    changeMonth: true,
    changeYear: true,
    yearRange: "-100:+0"
  });
  $('#add-book').click(function() {
    $('#book-container').slideToggle();
  });
  $('#add-author').click(function() {
    $('#author-container').slideToggle();
  });
  $('#add-publisher').click(function() {
    $('#pub-container').slideToggle();
  });
});
