@extends('dashboard_template.layout')

@section('main_content')

<main id="main" class="main">
    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Support Our Quran Academy</h1>
            <p>Your generous donations help us provide quality Quranic education to students worldwide.</p>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="impact-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">How Your Donations Make a Difference</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <h4>Support Students</h4>
                    <p>Your donations help us offer scholarships to students who cannot afford tuition fees.</p>
                </div>
                <div class="col-md-4 text-center">
                    <h4>Expand Our Programs</h4>
                    <p>We use your contributions to develop new courses and expand our reach to more students.</p>
                </div>
                <div class="col-md-4 text-center">
                    <h4>Improve Technology</h4>
                    <p>Donations help us invest in better technology for an enhanced learning experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Form Section -->
    <section class="donation-form-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Make a Donation</h2>
            <form action="" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="donor_name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="donor_name" name="donor_name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="donor_email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="donor_email" name="donor_email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="donation_amount" class="form-label">Donation Amount</label>
                        <input type="number" class="form-control" id="donation_amount" name="donation_amount" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="payment_method" class="form-label">Payment Method</label>
                        <select class="form-select" id="payment_method" name="payment_method" required>
                            <option value="credit_card">Credit Card</option>
                            <option value="paypal">PayPal</option>
                            <option value="bank_transfer">Bank Transfer</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message (Optional)</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Donate Now</button>
                </div>
            </form>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Frequently Asked Questions (FAQs)</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How can I make a donation?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can make a donation using our secure online form above. We accept credit card, PayPal,
                            and bank transfer payments.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Is my donation tax-deductible?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, all donations are tax-deductible to the extent permitted by law. You will receive a
                            receipt for your donation.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How will my donation be used?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Your donation will be used to support students, expand our programs, and improve our
                            technology to enhance the learning experience.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Can I make a recurring donation?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, you can choose to make a recurring donation on our donation form. Your continued
                            support helps us plan and grow our programs more effectively.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection