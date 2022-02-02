<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <!-- Signup: Horizontal Ellie -->
    {{-- <div class="modal fade" id="modalSignupHorizontal" tabindex="-1" role="dialog"
        aria-labelledby="modalSignupHorizontalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="card card-row">
                    <div class="row gx-0">
                        <div class="col-12 col-md-4 bg-cover card-img-start"
                            style="background-image: url( https://i.postimg.cc/s1FkGFCJ/Ellie-Salishan2.jpg);">

                            <!-- Image (placeholder) -->
                            <img src=" https://i.postimg.cc/s1FkGFCJ/Ellie-Salishan2.jpg" alt="..."
                                class="img-fluid d-md-none invisible">

                            <!-- Shape -->
                            <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                                <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor" />
                                </svg>
                            </div>

                        </div>
                        <div class="col-12 col-md-8">
                            <div class="card-body">

                                <!-- Close -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>

                                <!-- Heading -->
                                <h2 class="mb-0 fw-bold text-center" id="modalSignupHorizontalTitle">
                                    Sign Up
                                </h2>

                                <!-- Text -->
                                <p class="mb-6 text-center text-muted">
                                    Start building upon your passions.<br><br>

                                    We're excited to have you join the "Beta-Site" team! By adding your information to
                                    our list we'll be able to keep you informed about our Beta-Site and its initial
                                    launch.
                                    <br><br>

                                    In addition, once launched, you'll gain access to take a look at how the Si Quis
                                    platform can help you create and grow your passion business.
                                    <br><br>

                                    We'll only send information as our milestones unfold... otherwise we'll keep quite
                                    and not add to your inbox!
                                </p>



                                <!-- Text -->
                                <p class="mb-0 fs-sm text-center text-muted">
                                    Already have an account? <a data-bs-dismiss="modal" data-bs-toggle="modal"
                                        href="#modalSigninHorizontal">Log in</a>.
                                </p>
                                <p class="mb-0 fs-sm text-center text-muted">
                                    * Required fields
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Form -->
    {{-- {{ $errors }}
    @error($attributes->whereStartsWith('wire:model')->first())
        <p wire:key="error_{{ $attributes->whereStartsWith('wire:model')->first() }}" class="mt-2 text-sm text-red-600"
            id="email-error">{{ $message }}
        </p>
    @enderror --}}
    <form class="mb-6" wire:submit.prevent="submitLead">

        <!-- Company Name -->
        <div class="form-group">
            <label class="visually-hidden" for="modalSignupHorizontalCompanyName">
                Company Name
            </label>
            <input wire:model="company" type="text" class="form-control" id="modalSignupHorizontalCompanyName"
                placeholder="Company name">
        </div>

        <!-- User Name -->
        <div class="form-group">
            <label class="visually-hidden" for="modalSignupHorizontalUserName">
                Your Name
            </label>
            <input wire:model="name" type="text" class="form-control" id="" placeholder="Your name *">
        </div>

        <!-- Email -->
        <div class="form-group">
            <label class="visually-hidden" for="modalSignupHorizontalEmail">
                Your email
            </label>
            <input wire:model="email" type="email" class="form-control" id="" placeholder="Your email *">
        </div>

        <!-- Submit -->
        <button class="btn btn-xs w-100 btn-info" type="submit">
            Sign up
        </button>

    </form>
</div>
