<!-- The Modal -->
<div id="myModal" class="modal">
                                              <!-- Modal content (image) -->
                                              <div class="modal-content">
                                                  <span class="close" onclick="closeModal()">&times;</span>
                                                  <img id="modalImage" class="modal-content"  src="" alt="Clicked Image">
                                              </div>
                                          </div>
                                          <style>
                                              /* The Modal (background) */
                                              .modal {
                                                display: none; /* Hidden by default */
                                                position: fixed; /* Stay in place */
                                                z-index: 1; /* Sit on top */
                                                padding-top: 100px; /* Location of the box */
                                                left: 0;
                                                top: 0;
                                                width: 100%; /* Full width */
                                                height: 100%; /* Full height */
                                                overflow: auto; /* Enable scroll if needed */
                                                background-color: rgb(0, 0, 0); /* Fallback color */
                                                background-color: rgba(0, 0, 0, 0.9); /* Black w/ opacity */
                                              }

                                              /* Modal Content (image) */
                                              .modal-content {
                                                margin: auto;
                                                display: block;
                                                width: 80%;
                                                max-width: 700px;
                                              }
                                              /* Add Animation */
                                              .modal-content,
                                              #caption {
                                                -webkit-animation-name: zoom;
                                                -webkit-animation-duration: 0.6s;
                                                animation-name: zoom;
                                                animation-duration: 0.6s;
                                              }

                                              @-webkit-keyframes zoom {
                                                from {
                                                  -webkit-transform: scale(0);
                                                }
                                                to {
                                                  -webkit-transform: scale(1);
                                                }
                                              }

                                              @keyframes zoom {
                                                from {
                                                  transform: scale(0);
                                                }
                                                to {
                                                  transform: scale(1);
                                                }
                                              }

                                              /* The Close Button */
                                              .close {
                                                position: absolute;
                                                top: 15px;
                                                right: 35px;
                                                color: #f1f1f1;
                                                font-size: 40px;
                                                font-weight: bold;
                                                transition: 0.3s;
                                              }

                                              .close:hover,
                                              .close:focus {
                                                color: #bbb;
                                                text-decoration: none;
                                                cursor: pointer;
                                              }

                                              /* 100% Image Width on Smaller Screens */
                                              @media only screen and (max-width: 700px) {
                                                .modal-content {
                                                  width: 100%;
                                                }
                                              }
                                            </style>

                                          <script>
                                              // Function to handle image click
                                              function handleImageClick(imagePath) {
                                                  var modalImage = document.getElementById('modalImage');
                                                  modalImage.src = imagePath;
                                                  document.getElementById('myModal').style.display = 'flex';
                                              }

                                              // Function to close the modal
                                              function closeModal() {
                                                  document.getElementById('myModal').style.display = 'none';
                                              }

                                              // Close the modal if the user clicks outside the modal content
                                              window.onclick = function(event) {
                                                  var modal = document.getElementById('myModal');
                                                  if (event.target == modal) {
                                                      modal.style.display = 'none';
                                                  }
                                              }
                                          </script>