<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">


                <form action="{{ route('submit') }}" method="post" enctype="multipart/form-data"
                    class="px-3 py-3">
                    @csrf

                    <div class="m-3 row">
                        <label for="name" class="col-sm-3 form-label fw-bold text-md-end">Name:</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" />
                        </div>
                    </div>

                    <div class="m-3 row">
                        <label for="email" class="col-sm-3 form-label fw-bold text-md-end">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" />
                        </div>
                    </div>

                    <div class="m-3 row">
                        <label for="message" class="col-sm-3 form-label fw-bold text-md-end">Message:</label>
                        <div class="col-sm-9">
                            <input type="text-area" name="message" class="form-control" />
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-end">
                                <button style="background-color: green" class="btn btn-success m-3"
                                    type="submit">Save</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
