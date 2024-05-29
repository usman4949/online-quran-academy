@extends('dashboard_template.layout')

@section('main_content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>User Registration Form</h1>
    </div>

    <section class="section dashboard">
        @if(Session::has('error'))
        <div class="alert alert-danger" id="alert">
            {{ Session::get('error') }}
        </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-success" id="alert">
            {{ Session::get('success') }}
        </div>
        @endif
        <div class="row">
            <form action="{{ url('store_registeration') }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- UserName and Father Name -->
                <div class="row">
                    <div class="col-sm-6">
                        <label>Student Name</label>
                        <input type="text" class="form-control" autocomplete="on" name="username"
                            value="{{ old('username', $user->username ?? '') }}">
                        @error('username')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>Guardian/Parent Name</label>
                        <input type="text" class="form-control" autocomplete="on" name="fathername"
                            value="{{ old('fathername') }}">
                        @error('fathername')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- Email and Gender-->
                <div class="row mt-2">
                    <div class="col-sm-6">
                        <label>Email ID</label><br>
                        <input type="email" class="form-control" autocomplete="on" name="email"
                            value="{{ old('email', $user->email ?? '') }}">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>Gender</label>
                        <div class="elementor-field-subgroup elementor-subgroup-inline mt-2">
                            <span class="elementor-field-option">
                                <input type="radio" value="Male" name="gender"
                                    {{ old('gender') == 'Male' ? 'checked' : '' }}>
                                <label>Male</label>
                            </span>
                            <span class="elementor-field-option">
                                <input type="radio" value="Female" name="gender"
                                    {{ old('gender') == 'Female' ? 'checked' : '' }}>
                                <label>Female</label>
                            </span>
                            <span class="elementor-field-option">
                                <input type="radio" value="Other" name="gender"
                                    {{ old('gender') == 'Other' ? 'checked' : '' }}>
                                <label>Other</label>
                            </span>
                        </div>
                        @error('gender')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <!-- Date of Birth and Gender -->
                <div class="row mt-2">
                    <div class="col-sm-6">
                        <label>Date Of Birth</label>
                        <input type="date" class="form-control" autocomplete="on" name="birth"
                            value="{{ old('birth') }}">
                        @error('birth')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>Phone No.</label>
                        <input type="text" class="form-control" autocomplete="on" name="phone_number"
                            value="{{ old('phone_number', $user->phone_number ?? '') }}">
                        @error('phone_number')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Whatsapp and Phone Number -->
                <div class="row mt-2">
                    <div class="col-sm-6">
                        <label>Whatsapp No.</label>
                        <input type="text" class="form-control" autocomplete="on" name="whatsapp"
                            value="{{ old('whatsapp') }}">
                        @error('whatsapp')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>Skype or Emo ID (optional)</label>
                        <input type="text" class="form-control" autocomplete="on" name="skype"
                            value="{{ old('skype') }}">
                        @error('skype')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Address and class per week -->
                <div class="row mt-2">
                    <div class="col-sm-6">
                        <label>Address</label>
                        <input type="text" class="form-control" autocomplete="on" name="address"
                            value="{{ old('address') }}">
                        @error('address')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>Classes Per Week</label>
                        <input type="text" class="form-control" name="classes_per_week"
                            value="{{ old('classes_per_week') }}">
                        @error('classes_per_week')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Best time and Teacher gender -->
                <div class="row mt-2">
                    <div class="col-sm-6">
                        <label>Best Contact Time</label>
                        <div class="elementor-field-subgroup elementor-subgroup-inline mt-2">
                            <span class="elementor-field-option">
                                <input type="radio" value="Morning" name="contact_time"
                                    {{ old('contact_time') == 'Morning' ? 'checked' : '' }}>
                                <label>Morning</label>
                            </span>
                            <span class="elementor-field-option">
                                <input type="radio" value="Day" name="contact_time"
                                    {{ old('contact_time') == 'Day' ? 'checked' : '' }}>
                                <label>Day</label>
                            </span>
                            <span class="elementor-field-option">
                                <input type="radio" value="Evening" name="contact_time"
                                    {{ old('contact_time') == 'Evening' ? 'checked' : '' }}>
                                <label>Evening</label>
                            </span>
                        </div>
                        @error('contact_time')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <label>Teacher</label>
                        <div class="elementor-field-subgroup elementor-subgroup-inline mt-2">
                            <span class="elementor-field-option">
                                <input type="radio" value="Male" name="teacher_gender"
                                    {{ old('teacher_gender') == 'Male' ? 'checked' : '' }}>
                                <label for="form-field-best_time-0">Male</label>
                            </span>
                            <span class="elementor-field-option">
                                <input type="radio" value="Female" name="teacher_gender"
                                    {{ old('teacher_gender') == 'Female' ? 'checked' : '' }}>
                                <label for="form-field-best_time-1">Female</label>
                            </span>
                            <span class="elementor-field-option">
                                <input type="radio" value="Anyone" name="teacher_gender"
                                    {{ old('teacher_gender') == 'Anyone' ? 'checked' : '' }}>
                                <label for="form-field-best_time-2">Anyone</label>
                            </span>
                        </div>
                        @error('teacher_gender')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <!-- Country and state -->
                <div class="row mt-2">
                    <div class="col-sm-6">
                        <div class="select">
                            <label>Country</label><br>
                            <select name="country" class="form-control bg-white" value="{{ old('country') }}">
                                <option value="" disabled selected>Select your Country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                                </option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's
                                    Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                </option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                    Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                </option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                </option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines
                                </option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The
                                    South
                                    Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                            @error('country')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="select1">
                            <label>State/Province</label><br>
                            <input type="text" class="form-control" name="state" value="{{ old('state') }}">
                            @error('state')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- Language and All Cources -->
                <div class="row mt-2">
                    <div class="col-sm-6">
                        <label>Language</label><br>
                        <select class="form-control bg-white" name="language" value="{{ old('language') }}">
                            <option selected disabled>Select your language</option>
                            <option>English</option>
                            <option>Hindi - हिन्दी</option>
                            <option>Arabic - العربية</option>
                            <option>Punjabi - ਪੰਜਾਬੀ</option>
                            <option>Spanish - español</option>
                            <option>Chinese - 中文</option>
                            <option>Portuguese - português</option>
                            <option>Bengali - বাংলা</option>
                            <option>Russian - русский</option>
                            <option>Japanese - 日本語</option>
                        </select>
                        @error('language')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>All Trades</label><br>
                        <select name="courses" class="form-control bg-white" value="{{ old('courses') }}">
                            <option selected disabled>Select Your Trade</option>
                            <optgroup label="Computer Trades">
                                <option value="Amazon">Amazon </option>
                                <option value="Computer Applications">Computer Applications</option>
                                <option value="IT (Computer Operator) NVC">IT (Computer Operator) NVC</option>
                                <option value="IT (Office Assistant) NVC">IT (Office Assistant) NVC</option>
                                <option value="IT (Web Designing & Development) NVC">IT (Web Designing &
                                    Development) NVC</option>
                                <option value="Computer Aided Design & Manufacturing (NVC)">Computer Aided
                                    Design & Manufacturing (NVC)</option>
                                <option value="Computerized Accounting">Computerized Accounting</option>
                            </optgroup>
                            <optgroup label="Beautician Trades (Only Female)">
                                <option value="Beautician">Beautician</option>
                                <option value="Beauty Care (Beauty Therapy) NVC">Beauty Care (Beauty Therapy)
                                    NVC</option>
                                <option value="Beauty Care (Skin Care) NVC">Beauty Care (Skin Care) NVC</option>
                                <option value="Beauty Care (Hair Styling) NVC">Beauty Care (Hair Styling) NVC
                                </option>
                            </optgroup>
                            <optgroup label="Electrical Trades">
                                <option value="Electrician">Electrician</option>
                                <option value="Electrical Wiring Technician">Electrical Wiring Technician
                                </option>
                            </optgroup>
                        </select>
                        @error('cources')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Reffered BY -->
                <div class="row mt-2">
                    <div class="col-sm-6">
                        <label>Reffered By</label><br>
                        <select name="referred" class="form-control bg-white" value="{{ old('referred') }}">
                            <option disabled selected>Please Tell Us</option>
                            <option value="Google">Google</option>
                            <option value="Friends">Friends</option>
                        </select>
                        @error('referred')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Profile Images -->
                    <div class="col-sm-3 mt-4">
                        <label for="profile-image" class="custom-file-upload">
                            <i class="fa fa-cloud-upload"></i> Choose Profile Image
                        </label>
                        <input id="profile-image" type="file" class="form-control bg-white"
                            onchange="previewImage(this, 'image');" name="image" multiple style="display: none;">
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Perview Images -->
                    <div class="col-sm-3">
                        <img src="" id="imagePreview" width="100" height="120"
                            style="border: 1px solid #ccc; border-radius: 5px; margin-top: 20px; margin-left: 70px;">
                    </div>
                </div>
                <!-- Agree Terms and Conditions -->
                <div class="col-sm-12">
                    <label>Agree to terms and conditions</label>
                    <input type="checkbox" name="agree_terms">
                    @error('agree_terms')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Submit and Reset Buttons -->
                <div class="row mt-2">
                    <div class="col-sm-12" id="terms">
                        <input type="Submit" class="btn btn-success" value="Submit" name="submit">
                        <input type="Reset" class="btn btn-danger" value="Reset">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- this script is for perview images -->
    <script>
    function previewImage(input, previewId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#' + previewId + 'Preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var errorAlert = document.getElementById('alert');
            if (errorAlert) {
                // Fade out the alert
                errorAlert.style.transition = "opacity 0.5s ease";
                errorAlert.style.opacity = '0';
                
                // Remove the alert from the DOM after the fade-out transition
                setTimeout(function() {
                    errorAlert.remove();
                }, 500); // Wait for the fade-out transition to complete
            }
        }, 5000); // 5 seconds
    });

    </script>
</main>

@endsection