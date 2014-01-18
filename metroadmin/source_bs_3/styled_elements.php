<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
			<div class="page-header">
				<h1>
					Styled Elements</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
				<li><a href="form_basic.php">Forms</a> <i class="fa fa-angle-right"></i></li>
				<li><a href="styled_elements.php">Styled Elements</a></li>
				<li class="pull-right"><a href="#" class="close">&times</a></li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Styled Select</h3>
						</div>
						<div class="panel-body">
							<form action="#" method="POST" class="form-horizontal">
							<div class="form-group">
								<label class="col-md-3 control-label">
									Standard Select
								</label>
								<div class="col-md-9">
									<select id="country" name="country" data-placeholder="Choose a Country..." class="chosen-select">
										<option value=""></option>
										<option value="United States">United States</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Aland Islands">Aland Islands</option>
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
										<option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
										<option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Bouvet Island">Bouvet Island</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
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
										<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic
											of The</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cote D'ivoire">Cote D'ivoire</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Curacao">Curacao</option>
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
										<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
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
										<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic
											of</option>
										<option value="Korea, Republic of">Korea, Republic of</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macao">Macao</option>
										<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav
											Republic of</option>
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
										<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
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
										<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
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
										<option value="Saint Barthelemy">Saint Barthelemy</option>
										<option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension
											and Tristan da Cunha</option>
										<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
										<option value="Saint Lucia">Saint Lucia</option>
										<option value="Saint Martin (French part)">Saint Martin (French part)</option>
										<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
										<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
										<option value="Samoa">Samoa</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome and Principe">Sao Tome and Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia">Serbia</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="South Georgia and The South Sandwich Islands">South Georgia and The South
											Sandwich Islands</option>
										<option value="South Sudan">South Sudan</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syrian Arab Republic">Syrian Arab Republic</option>
										<option value="Taiwan, Province of China">Taiwan, Province of China</option>
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
										<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
										<option value="Viet Nam">Viet Nam</option>
										<option value="Virgin Islands, British">Virgin Islands, British</option>
										<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
										<option value="Wallis and Futuna">Wallis and Futuna</option>
										<option value="Western Sahara">Western Sahara</option>
										<option value="Yemen">Yemen</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">
									Multiple Select
								</label>
								<div class="col-md-9">
									<select data-placeholder="Choose a Country..." class="chosen-select"
										multiple>
										<option value=""></option>
										<option value="United States">United States</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Aland Islands">Aland Islands</option>
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
										<option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
										<option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Bouvet Island">Bouvet Island</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
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
										<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic
											of The</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cote D'ivoire">Cote D'ivoire</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Curacao">Curacao</option>
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
										<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
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
										<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic
											of</option>
										<option value="Korea, Republic of">Korea, Republic of</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macao">Macao</option>
										<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav
											Republic of</option>
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
										<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
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
										<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
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
										<option value="Saint Barthelemy">Saint Barthelemy</option>
										<option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension
											and Tristan da Cunha</option>
										<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
										<option value="Saint Lucia">Saint Lucia</option>
										<option value="Saint Martin (French part)">Saint Martin (French part)</option>
										<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
										<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
										<option value="Samoa">Samoa</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome and Principe">Sao Tome and Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia">Serbia</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="South Georgia and The South Sandwich Islands">South Georgia and The South
											Sandwich Islands</option>
										<option value="South Sudan">South Sudan</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syrian Arab Republic">Syrian Arab Republic</option>
										<option value="Taiwan, Province of China">Taiwan, Province of China</option>
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
										<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
										<option value="Viet Nam">Viet Nam</option>
										<option value="Virgin Islands, British">Virgin Islands, British</option>
										<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
										<option value="Wallis and Futuna">Wallis and Futuna</option>
										<option value="Western Sahara">Western Sahara</option>
										<option value="Yemen">Yemen</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">
									Single Select with Groups
								</label>
								<div class="col-md-9">
									<select data-placeholder="Your Favorite Football Team" class="chosen-select">
										<option value=""></option>
										<optgroup label="NFC EAST">
											<option>Dallas Cowboys</option>
											<option>New York Giants</option>
											<option>Philadelphia Eagles</option>
											<option>Washington Redskins</option>
										</optgroup>
										<optgroup label="NFC NORTH">
											<option>Chicago Bears</option>
											<option>Detroit Lions</option>
											<option>Green Bay Packers</option>
											<option>Minnesota Vikings</option>
										</optgroup>
										<optgroup label="NFC SOUTH">
											<option>Atlanta Falcons</option>
											<option>Carolina Panthers</option>
											<option>New Orleans Saints</option>
											<option>Tampa Bay Buccaneers</option>
										</optgroup>
										<optgroup label="NFC WEST">
											<option>Arizona Cardinals</option>
											<option>St. Louis Rams</option>
											<option>San Francisco 49ers</option>
											<option>Seattle Seahawks</option>
										</optgroup>
										<optgroup label="AFC EAST">
											<option>Buffalo Bills</option>
											<option>Miami Dolphins</option>
											<option>New England Patriots</option>
											<option>New York Jets</option>
										</optgroup>
										<optgroup label="AFC NORTH">
											<option>Baltimore Ravens</option>
											<option>Cincinnati Bengals</option>
											<option>Cleveland Browns</option>
											<option>Pittsburgh Steelers</option>
										</optgroup>
										<optgroup label="AFC SOUTH">
											<option>Houston Texans</option>
											<option>Indianapolis Colts</option>
											<option>Jacksonville Jaguars</option>
											<option>Tennessee Titans</option>
										</optgroup>
										<optgroup label="AFC WEST">
											<option>Denver Broncos</option>
											<option>Kansas City Chiefs</option>
											<option>Oakland Raiders</option>
											<option>San Diego Chargers</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">
									Multiple Select with Groups
								</label>
								<div class="col-md-9">
									<select data-placeholder="Your Favorite Football Teams" class="chosen-select"	multiple>
										<option value=""></option>
										<optgroup label="NFC EAST">
											<option>Dallas Cowboys</option>
											<option>New York Giants</option>
											<option>Philadelphia Eagles</option>
											<option>Washington Redskins</option>
										</optgroup>
										<optgroup label="NFC NORTH">
											<option>Chicago Bears</option>
											<option>Detroit Lions</option>
											<option>Green Bay Packers</option>
											<option>Minnesota Vikings</option>
										</optgroup>
										<optgroup label="NFC SOUTH">
											<option>Atlanta Falcons</option>
											<option>Carolina Panthers</option>
											<option>New Orleans Saints</option>
											<option>Tampa Bay Buccaneers</option>
										</optgroup>
										<optgroup label="NFC WEST">
											<option>Arizona Cardinals</option>
											<option>St. Louis Rams</option>
											<option>San Francisco 49ers</option>
											<option>Seattle Seahawks</option>
										</optgroup>
										<optgroup label="AFC EAST">
											<option>Buffalo Bills</option>
											<option>Miami Dolphins</option>
											<option>New England Patriots</option>
											<option>New York Jets</option>
										</optgroup>
										<optgroup label="AFC NORTH">
											<option>Baltimore Ravens</option>
											<option>Cincinnati Bengals</option>
											<option>Cleveland Browns</option>
											<option>Pittsburgh Steelers</option>
										</optgroup>
										<optgroup label="AFC SOUTH">
											<option>Houston Texans</option>
											<option>Indianapolis Colts</option>
											<option>Jacksonville Jaguars</option>
											<option>Tennessee Titans</option>
										</optgroup>
										<optgroup label="AFC WEST">
											<option>Denver Broncos</option>
											<option>Kansas City Chiefs</option>
											<option>Oakland Raiders</option>
											<option>San Diego Chargers</option>
										</optgroup>
									</select>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default blue">
						<div class="panel-heading">
							<h3 class="panel-title">Styled Checkbox</h3>
						</div>
						<div class="panel-body">
							<form action="#" method="POST" class="form-horizontal">
							<div class="form-group">
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="inlineCheckbox1" value="test" data-provide="fcheck" data-color="blue" />Blue
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox1" value="test" data-provide="fcheck" data-color="blue" checked />Blue	checked
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox2" value="test" data-provide="fcheck" data-color="blue" disabled />Blue disabled
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox3" value="test" data-provide="fcheck" data-color="blue" checked disabled />Blue disble checked
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="inlineCheckbox1" value="test" data-provide="fcheck" data-color="red" />Red
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox1" value="test" data-provide="fcheck" data-color="red" checked />Red checked
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox2" value="test" data-provide="fcheck" data-color="red" disabled />Red disabled
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox3" value="test" data-provide="fcheck" data-color="red" checked disabled />Red disble checked
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="inlineCheckbox1" value="test" data-provide="fcheck" data-color="orange" />Orange
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox1" value="test" data-provide="fcheck" data-color="orange" checked />Orange checked
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox2" value="test" data-provide="fcheck" data-color="orange" disabled />Orange disabled
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox3" value="test" data-provide="fcheck" data-color="orange" checked disabled />Orange disble checked
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="inlineCheckbox1" value="test" data-provide="fcheck" data-color="purple" />Purple
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox1" value="test" data-provide="fcheck" data-color="purple" checked />Purple checked
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox2" value="test" data-provide="fcheck" data-color="purple" disabled />Purple disabled
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox3" value="test" data-provide="fcheck" data-color="purple" checked disabled />Purple disble checked
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="inlineCheckbox1" value="test" data-provide="fcheck" data-color="green" />Green
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox1" value="test" data-provide="fcheck" data-color="green" checked />Green checked
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox2" value="test" data-provide="fcheck" data-color="green" disabled />Green disabled
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox3" value="test" data-provide="fcheck" data-color="green" checked disabled />Green disble checked
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="inlineCheckbox1" value="test" data-provide="fcheck" data-color="skyblue" />SkyBlue
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox1" value="test" data-provide="fcheck" data-color="skyblue" checked />SkyBlue checked
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox2" value="test" data-provide="fcheck" data-color="skyblue" disabled />SkyBlue disabled
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox3" value="test" data-provide="fcheck" data-color="skyblue" checked disabled />SkyBlue disble checked
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="inlineCheckbox1" value="test" data-provide="fcheck" data-color="grey" />Grey
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox1" value="test" data-provide="fcheck" data-color="grey" checked />Grey checked
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox2" value="test" data-provide="fcheck" data-color="grey" disabled />Grey disabled
									</label>
								</div>
								<div class="col-md-3">
									<label class="checkbox-inline">
										<input type="checkbox" id="Checkbox3" value="test" data-provide="fcheck" data-color="grey" checked disabled />Grey disble checked
									</label>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default blue">
						<div class="panel-heading">
							<h3 class="panel-title">Styled Radio</h3>
						</div>
						<div class="panel-body">
							<form action="#" method="POST" class="form-horizontal">
								<div class="form-group">
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="blue" />Blue
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="blue" checked />Blue	checked
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="blue" disabled />Blue disabled
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="blue" checked disabled />Blue disble checked
										</label>
									</div>
								</div>
							</form>
							<form action="#" method="POST" class="form-horizontal">
								<div class="form-group">
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="red" />Red
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="red" checked />Red checked
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="red" disabled />Red disabled
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="red" checked disabled />Red disble checked
										</label>
									</div>
								</div>
							</form>
							<form action="#" method="POST" class="form-horizontal">
								<div class="form-group">
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="orange" />Orange
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="orange" checked />Orange checked
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="orange" disabled />Orange disabled
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="orange" checked disabled />Orange disble checked
										</label>
									</div>
								</div>
							</form>
							<form action="#" method="POST" class="form-horizontal">
								<div class="form-group">
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="purple" />Purple
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="purple" checked />Purple checked
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="purple" disabled />Purple disabled
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="purple" checked disabled />Purple disble checked
										</label>
									</div>
								</div>
							</form>
							<form action="#" method="POST" class="form-horizontal">
								<div class="form-group">
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="green" />Green
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="green" checked />Green checked
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="green" disabled />Green disabled
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="green" checked disabled />Green disble checked
										</label>
									</div>
								</div>
							</form>
							<form action="#" method="POST" class="form-horizontal">
								<div class="form-group">
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="skyblue" />SkyBlue
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="skyblue" checked />SkyBlue checked
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="skyblue" disabled />SkyBlue disabled
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="skyblue" checked disabled />SkyBlue disble checked
										</label>
									</div>
								</div>
							</form>
							<form action="#" method="POST" class="form-horizontal">
								<div class="form-group">
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="grey" />Grey
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="grey" checked />Grey checked
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="grey" disabled />Grey disabled
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="grey" checked disabled />Grey disble checked
										</label>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
	 		<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default blue">
						<div class="panel-heading">
							<h3 class="panel-title">Size</h3>
						</div>
						<div class="panel-body">
							<form action="#" method="POST" class="form-horizontal">
								<div class="form-group">
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox1" value="test" data-provide="fcheck" data-color="blue" data-size="medium" />Blue medium
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="checkbox" id="Checkbox1" value="test" data-provide="fcheck" data-color="blue" data-size="medium" checked />Blue medium checked
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="checkbox" id="Checkbox2" value="test" data-provide="fcheck" data-color="blue" data-size="medium"  disabled />Blue medium disabled
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="checkbox" id="Checkbox3" value="test" data-provide="fcheck" data-color="blue" data-size="medium"  checked disabled />Blue medium disble checked
										</label>
									</div>
								</div>
							</form>
							<form action="#" method="POST" class="form-horizontal">
								<div class="form-group">
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="blue" data-size="medium" />Blue medium
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="blue" data-size="medium" checked />Blue	medium checked
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="blue" data-size="medium" disabled />Blue medium disabled
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="blue" data-size="medium" checked disabled />Blue medium disble checked
										</label>
									</div>
								</div>
							</form>
							<form action="#" method="POST" class="form-horizontal">
								<div class="form-group">
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox1" value="test" data-provide="fcheck" data-color="blue" data-size="large" />Blue large
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="checkbox" id="Checkbox1" value="test" data-provide="fcheck" data-color="blue" data-size="large" checked />Blue large checked
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="checkbox" id="Checkbox2" value="test" data-provide="fcheck" data-color="blue" data-size="large"  disabled />Blue large disabled
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="checkbox" id="Checkbox3" value="test" data-provide="fcheck" data-color="blue" data-size="large"  checked disabled />Blue large disble checked
										</label>
									</div>
								</div>
							</form>
							<form action="#" method="POST" class="form-horizontal">
								<div class="form-group">
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="blue" data-size="large" />Blue large
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="blue" data-size="large" checked />Blue	large checked
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="blue" data-size="large" disabled />Blue large disabled
										</label>
									</div>
									<div class="col-md-3">
										<label class="checkbox-inline">
											<input type="radio" name="rdo"  value="test" data-provide="fcheck" data-color="blue" data-size="large" checked disabled />Blue large disble checked
										</label>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
<?php include_once 'endcontainer.php' ?>
<?php include_once 'script.php' ?>
<?php include_once 'footer.php' ?>
