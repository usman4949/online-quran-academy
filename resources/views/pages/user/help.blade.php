@extends('dashboard_template.layout')

@section('main_content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Need Help?</h1>
        <p>We're here to assist you with any questions or concerns.</p>
    </div>
    <!-- End Page Title -->

    <!-- About Section -->
    <section class="about-section py-2">
        <div class="container">
            <h2>About Our Online Quran Academy</h2>
            <p>Welcome to our Online Quran Academy. We are dedicated to providing high-quality Quranic education to
                students of all ages. Our experienced teachers are committed to helping you learn and understand the
                Quran from the comfort of your home.</p>
            <p>Our courses are designed to cater to beginners as well as advanced learners. We offer flexible scheduling
                to accommodate your busy lifestyle.</p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-2">
        <div class="container">
            <h2>Frequently Asked Questions (FAQs)</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What courses do you offer?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We offer a variety of courses including beginner to advanced Quran recitation, Tajweed,
                            Tafseer, and Arabic language courses.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How can I enroll in a course?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can enroll in a course by visiting our registration page and filling out the necessary
                            information. Our team will get in touch with you to complete the enrollment process.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What are the fees for the courses?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Our course fees vary depending on the course and duration. Please check the specific course
                            page for detailed pricing information.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Can I get a refund if I am not satisfied?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we offer a refund policy. If you are not satisfied with the course, please contact us
                            within the first week of your enrollment, and we will process a refund.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection