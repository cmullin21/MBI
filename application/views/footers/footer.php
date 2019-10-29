  </body>
<script type="text/javascript">
  $(document).ready(function() {

// key up from an input with class filter
$('.filter').on('keyup', function() {

     // create regular expression from value of the input
     var rex = new RegExp($(this).val(), 'i');

     // hide all <tr>
     $('.searchable tr').hide();

     // show all <tr> which contains your text
     $('.searchable tr').filter(function() {
          return rex.test($(this).text());
     }).show();
 }); 
}); 
</script>
</html>
