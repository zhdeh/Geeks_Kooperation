
        <!--footer-->
        <!-- next close div is container div-->
       </div>



       <!-- Option 1: Bootstrap Bundle with Popper -->
   
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
           integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
           crossorigin="anonymous"></script>
   
       <!--for pupup modal send message-->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
           integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
           crossorigin="anonymous"></script>
       <script>$('#exampleModal').on('show.bs.modal', function (event) {
               var button = $(event.relatedTarget) // Button that triggered the modal
               var recipient = button.data('whatever') // Extract info from data-* attributes
               // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
               // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
               var modal = $(this)
               modal.find('.modal-title').text('New message to ' + recipient)
               modal.find('.modal-body input').val(recipient)
           })</script>
       <!-- Option 2: Separate Popper and Bootstrap JS -->
   
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
           integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
           crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
           integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
           crossorigin="anonymous"></script>
           
   
   </body>
   
   </html>