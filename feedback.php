    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Feedback Form</h5>
                    <button type="button" id="clear-button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark">


                    <form method="post" action="" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-12">
                            <h5 class="text-light">Provide Us Your Valuable Feedback to Help & Improve Us</h5>
                        </div>
                        <div class="col-md-8">
                            <label for="validationCustom03" class="form-label text-light">Rate Us Now</label>
                            <div class="star-widget" onclick="showfdback()">
                                <input type="radio" class="rate" name="rate" id="rate-1" value="5-star-ratings">
                                <label for="rate-1"><i class="far fa-star"></i></label>

                                <input type="radio" class="rate" name="rate" id="rate-2" value="4-star-ratings">
                                <label class="form-label" for="rate-2"><i class="far fa-star"></i></label>

                                <input type="radio" class="rate" name="rate" id="rate-3" value="3-star-ratings">
                                <label for="rate-3"><i class="far fa-star"></i></label>

                                <input type="radio" class="rate" name="rate" id="rate-4" value="2-star-ratings">
                                <label for="rate-4"><i class="far fa-star"></i></label>

                                <input type="radio" class="rate" name="rate" id="rate-5" value="1-star-ratings">
                                <label for="rate-5"><i class="far fa-star"></i></label>

                            </div>
                        </div>
                        <div class="col-md-6 formhide">
                            <label for="validationCustom03" class="form-label text-light">Name</label>
                            <input type="text" class="form-control bg-transparent text-white" id="validationCustom01" required name="name">
                            <div class="invalid-feedback">
                                Please provide your Name.
                            </div>
                        </div>
                        <div class="col-md-7 formhide">
                            <label for="validationCustom03" class="form-label text-light">Feedback Message</label>
                            <textarea style="resize: none;" type="text" rows="4" name="message" class="form-control bg-transparent text-light" id="validationCustom03" required></textarea>
                            <div class="invalid-feedback">
                                Please provide a Message.
                            </div>
                        </div>


                        <div class="col-12 text-center">
                            <button class="btn btn-success" name="submit" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->