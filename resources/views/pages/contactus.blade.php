
      @extends("layouts.master")
    @section("css")
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v4.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
    crossorigin="anonymous"
/>
<link rel="stylesheet" href="../css/contactus.css" />
    @endsection
    @section("content")
     
        <!--  -->
        <section class="contact_us">
            <div class="right">
                <h2>get in touch</h2>
                <p class="p_first">
                    We can ensure reliability, low cost fares and most
                    important, with safety and comfort in mind
                </p>
                <p class="p_secound">
                    Etiam sit amet convallis erat - class aptent taciti sociosqu
                    ad litora torquent per conubia! Maecenas gravida lacus.
                    Lorem etiam sit amet convallis erat
                </p>
                <div class="social-media">
                    <ul>
                        <li>
                            <a href="#"
                                ><i
                                    class="fa fa-facebook"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </li>
                        <li>
                            <a href="#"
                                ><i class="fa fa-twitter" aria-hidden="true"></i
                            ></a>
                        </li>
                        <li>
                            <a href="#"
                                ><i
                                    class="fa fa-instagram"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </li>
                        <li>
                            <a href="#"
                                ><i
                                    class="fa fa-linkedin"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="left">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="Enter email"
                            name="email"
                        />
                    </div>

                    <div class="form-group">
                        <label for="pwd">Name</label>
                        <input
                            type="Name"
                            class="form-control"
                            id="pwd"
                            placeholder="Enter Name"
                            name="pswd"
                        />
                    </div>

                    <div class="form-group">
                        <label for="Mes">Message</label>
                        <textarea
                            class="form-control"
                            id="Mes"
                            placeholder="Enter Your Message"
                            name="Mes"
                        >
                        </textarea>
                    </div>

                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </section>
        <!--  -->
       

        @endsection
        @section("js")
        <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"
    ></script>
        @endsection

