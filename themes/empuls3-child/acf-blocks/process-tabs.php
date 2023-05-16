<section class="process-tabs py-5 position-relative">
    <img class="stripe-left" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-left.svg" alt="a red line">

    <div class="container section-index">
        <div class="row mb-5">
            <div class="col">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_sub_field( 'header' ); ?>
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col">

                <ul class="nav nav-tabs nav-pills nav-fill gap-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="discovery-tab" data-bs-toggle="tab" data-bs-target="#discovery-tab-pane" type="button" role="tab" aria-controls="discovery-tab-pane" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="front-end-tab" data-bs-toggle="tab" data-bs-target="#front-end-tab-pane" type="button" role="tab" aria-controls="front-end-tab-pane" aria-selected="false">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="back-end-tab" data-bs-toggle="tab" data-bs-target="#back-end-tab-pane" type="button" role="tab" aria-controls="back-end-tab-pane" aria-selected="false">Contact</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="integration-tab" data-bs-toggle="tab" data-bs-target="#integration-tab-pane" type="button" role="tab" aria-controls="integration-tab-pane" aria-selected="false">Integration</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="testing-tab" data-bs-toggle="tab" data-bs-target="#testing-tab-pane" type="button" role="tab" aria-controls="testing-tab-pane" aria-selected="false">Testing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="support-tab" data-bs-toggle="tab" data-bs-target="#support-tab-pane" type="button" role="tab" aria-controls="support-tab-pane" aria-selected="false">support</button>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="discovery-tab-pane" role="tabpanel" aria-labelledby="discovery-tab" tabindex="0">
                        <div class="row d-flex align-items-center">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <h3>
                                    Discovery and Business Analysis
                                </h3>
                                <p>
                                    The initial research efforts in the project definition start with the project discovery phase, where our business analysts understand the project’s purpose and identify the needs of your target audience. It helps them choose the right technology stack, define the deliverables, and estimate the timelines and resources.
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2 Graphic Designer Female 1.png" alt="Graphic Designer Female">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="front-end-tab-pane" role="tabpanel" aria-labelledby="front-end-tab" tabindex="0">
                        <div class="row d-flex align-items-center">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <h3>
                                    Front-end design and development
                                </h3>
                                <p>
                                    After understanding user audience needs, our web designers incorporate these requirements in UI design. Once the app's look and feel with project stakeholders is finalized, we breathe life into it using front-end coding.
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Image 4 - CEO working at the computer-02.png" alt="developer working at the computer">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="back-end-tab-pane" role="tabpanel" aria-labelledby="back-end-tab" tabindex="0">
                        <div class="row d-flex align-items-center">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <h3>
                                    Back-end development
                                </h3>
                                <p>
                                    In this stage, we implement the application logic on the back end. For this, we use proven frameworks to write fast and quality codes.
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Image 8 - CEO and assistant-01.png" alt="back-end developer working at the computer">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="integration-tab-pane" role="tabpanel" aria-labelledby="integration-tab" tabindex="0">
                        <div class="row d-flex align-items-center">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <h3>
                                    Integration
                                </h3>
                                <p>
                                    We set up APIs for web app integration to ensure seamless data synchronization across third-party systems.
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Image 9 - CEO and business meeting-02.png" alt="developers meeting">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="testing-tab-pane" role="tabpanel" aria-labelledby="testing-tab" tabindex="0">
                        <div class="row d-flex align-items-center">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <h3>
                                    Testing and Hot Fixes
                                </h3>
                                <p>
                                    We put your mind at ease by extending hot fixes within 24 hours to resolve any issues in the functionality of your web application.
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Image 7 - CEO thinking & ideating-02.png" alt="CEO thinking & ideating">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="support-tab-pane" role="tabpanel" aria-labelledby="support-tab" tabindex="0">
                        <div class="row d-flex align-items-center">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <h3>
                                    Support and Evolution
                                </h3>
                                <p>
                                    We understand that a well-maintained web app attracts business and retains customers for a more extended period. Therefore, we continually support and advance your software by adding new features to align with your dynamic business needs.
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Image 9 - CEO and business meeting-01.png" alt="developers in a support meeting">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>