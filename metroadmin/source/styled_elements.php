<?php include_once 'header.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'navbar.php' ?>
	<?php include_once 'sidebar.php' ?>
	<!-- mainbar -->
	<div id="mainbar">
		<div id="container" class="container-fluid">
			<div class="page-header">
				<h1>
					Styled Elements</h1>
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
				<li><a href="form_basic.php">Forms</a> <i class="icon-angle-right"></i></li>
				<li><a href="styled_elements.php">Styled Elements</a></li>
				<li class="pull-right"><a href="#" class="close">&times</a></li>
			</ul>
			<div class="row-fluid">
				<div class="span12">
					<div class="box box-bordered red">
						<div class="box-title">
							<h4><i class="icon-edit"></i>Styled Select</h4>
						</div>
						<div class="box-content no-padding">
							<form action="#" method="POST" class="form-horizontal form-bordered">
							<div class="control-group">
								<label class="control-label">
									Standard Select
								</label>
								<div class="controls">
									<select id="country" name="country" data-placeholder="Choose a Country..." class="chzn-select input-xlarge">
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
							<div class="control-group">
								<label class="control-label">
									Multiple Select
								</label>
								<div class="controls">
									<select data-placeholder="Choose a Country..." class="chzn-select input-block-level"
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
							<div class="control-group">
								<label class="control-label">
									Single Select with Groups
								</label>
								<div class="controls">
									<select data-placeholder="Your Favorite Football Team" class="chzn-select input-xlarge">
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
							<div class="control-group">
								<label class="control-label">
									Multiple Select with Groups
								</label>
								<div class="controls">
									<select data-placeholder="Your Favorite Football Teams" class="chzn-select input-block-level"
										multiple>
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
							<div class="control-group no-border no-padding-bottom">
								<b>Chosen automatically highlights selected options and removes disabled options.</b>
							</div>
							<div class="control-group no-border no-padding-bottom">
								<label class="control-label">
									Single Select
								</label>
								<div class="controls">
									<select data-placeholder="Your Favorite Type of Bear" class="chzn-select input-xlarge">
										<option value=""></option>
										<option>American Black Bear</option>
										<option>Asiatic Black Bear</option>
										<option>Brown Bear</option>
										<option>Giant Panda</option>
										<option selected>Sloth Bear</option>
										<option disabled>Sun Bear</option>
										<option>Polar Bear</option>
										<option disabled>Spectacled Bear</option>
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Multiple Select
								</label>
								<div class="controls">
									<select data-placeholder="Your Favorite Types of Bear" multiple class="chzn-select input-block-level">
										<option value=""></option>
										<option>American Black Bear</option>
										<option>Asiatic Black Bear</option>
										<option>Brown Bear</option>
										<option>Giant Panda</option>
										<option selected>Sloth Bear</option>
										<option disabled>Sun Bear</option>
										<option selected>Polar Bear</option>
										<option disabled>Spectacled Bear</option>
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Allow Deselect on Single Selects
								</label>
								<div class="controls">
									<select data-placeholder="Your Favorite Type of Bear" class="chzn-select-deselect input-xlarge">
										<option value=""></option>
										<option>American Black Bear</option>
										<option>Asiatic Black Bear</option>
										<option>Brown Bear</option>
										<option>Giant Panda</option>
										<option selected>Sloth Bear</option>
										<option>Sun Bear</option>
										<option>Polar Bear</option>
										<option>Spectacled Bear</option>
									</select>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="box box-bordered blue">
						<div class="box-title">
							<h4><i class="icon-edit"></i>Styled Checkbox & Radio</h4>
						</div>
						<div class="box-content no-padding">
							<form action="#" method="POST" class="form-horizontal form-bordered">
							<div class="control-group">
								<label class="control-label">
									Minimal skin checkbox
								</label>
								<div class="controls">
									<div class="span3">
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" />Default
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" checked />Checked
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" disabled />Disabled
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" disabled checked />Disabled & Checked
										</label>
									</div>
									<div class="span3">
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" data-color="red" />Default
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" data-color="red" checked />Checked
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" data-color="red" disabled />Disabled
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" data-color="red" disabled checked />Disabled & Checked
										</label>
									</div>
									<div class="span3">
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" data-color="green" />Default
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" data-color="green" checked />Checked
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" data-color="green" disabled />Disabled
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" data-color="green" disabled checked />Disabled & Checked
										</label>
									</div>
									<div class="span3">
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" data-color="blue" />Default
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" data-color="blue" checked />Checked
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" data-color="blue" disabled />Disabled
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="minimal" data-color="blue" disabled checked />Disabled & Checked
										</label>
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Minimal skin radio
								</label>
								<div class="controls">
									<div class="span3">
										<label class="radio">
											<input type="radio" name="radio" data-style="icheck" data-skin="minimal" />Default
										</label>
										<label class="radio">
											<input type="radio" name="radio" data-style="icheck" data-skin="minimal" checked />Checked
										</label>
										<label class="radio">
											<input type="radio" name="radio2" data-style="icheck" data-skin="minimal" disabled />Disabled
										</label>
										<label class="radio">
											<input type="radio" name="radio2" data-style="icheck" data-skin="minimal" disabled checked />Disabled & Checked
										</label>
									</div>
									<div class="span3">
										<label class="radio">
											<input type="radio" name="radio3" data-style="icheck" data-skin="minimal" data-color="red" />Default
										</label>
										<label class="radio">
											<input type="radio" name="radio3" data-style="icheck" data-skin="minimal" data-color="red" checked />Checked
										</label>
										<label class="radio">
											<input type="radio" name="radio4" data-style="icheck" data-skin="minimal" data-color="red" disabled />Disabled
										</label>
										<label class="radio">
											<input type="radio" name="radio4" data-style="icheck" data-skin="minimal" data-color="red" disabled checked />Disabled & Checked
										</label>
									</div>
									<div class="span3">
										<label class="radio">
											<input type="radio" name="radio5" data-style="icheck" data-skin="minimal" data-color="green" />Default
										</label>
										<label class="radio">
											<input type="radio" name="radio5" data-style="icheck" data-skin="minimal" data-color="green" checked />Checked
										</label>
										<label class="radio">
											<input type="radio" name="radio6" data-style="icheck" data-skin="minimal" data-color="green" disabled />Disabled
										</label>
										<label class="radio">
											<input type="radio" name="radio6" data-style="icheck" data-skin="minimal" data-color="green" disabled checked />Disabled & Checked
										</label>
									</div>
									<div class="span3">
										<label class="radio">
											<input type="radio" name="radio7" data-style="icheck" data-skin="minimal" data-color="blue" />Default
										</label>
										<label class="radio">
											<input type="radio" name="radio7" data-style="icheck" data-skin="minimal" data-color="blue" checked />Checked
										</label>
										<label class="radio">
											<input type="radio" name="radio8" data-style="icheck" data-skin="minimal" data-color="blue" disabled />Disabled
										</label>
										<label class="radio">
											<input type="radio" name="radio8" data-style="icheck" data-skin="minimal" data-color="blue" disabled checked />Disabled & Checked
										</label>
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Minimal skin checkbox
								</label>
								<div class="controls">
									<div class="span3">
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" />Default
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" checked />Checked
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" disabled />Disabled
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" disabled checked />Disabled & Checked
										</label>
									</div>
									<div class="span3">
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" data-color="red" />Default
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" data-color="red" checked />Checked
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" data-color="red" disabled />Disabled
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" data-color="red" disabled checked />Disabled & Checked
										</label>
									</div>
									<div class="span3">
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" data-color="green" />Default
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" data-color="green" checked />Checked
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" data-color="green" disabled />Disabled
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" data-color="green" disabled checked />Disabled & Checked
										</label>
									</div>
									<div class="span3">
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" data-color="blue" />Default
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" data-color="blue" checked />Checked
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" data-color="blue" disabled />Disabled
										</label>
										<label class="checkbox">
											<input type="checkbox" data-style="icheck" data-skin="square" data-color="blue" disabled checked />Disabled & Checked
										</label>
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">
									Square skin radio
								</label>
								<div class="controls">
									<div class="span3">
										<label class="radio">
											<input type="radio" name="radio9" data-style="icheck" data-skin="square" />Default
										</label>
										<label class="radio">
											<input type="radio" name="radio9" data-style="icheck" data-skin="square" checked />Checked
										</label>
										<label class="radio">
											<input type="radio" name="radio10" data-style="icheck" data-skin="square" disabled />Disabled
										</label>
										<label class="radio">
											<input type="radio" name="radio10" data-style="icheck" data-skin="square" disabled checked />Disabled & Checked
										</label>
									</div>
									<div class="span3">
										<label class="radio">
											<input type="radio" name="radio11" data-style="icheck" data-skin="square" data-color="red" />Default
										</label>
										<label class="radio">
											<input type="radio" name="radio12" data-style="icheck" data-skin="square" data-color="red" checked />Checked
										</label>
										<label class="radio">
											<input type="radio" name="radio13" data-style="icheck" data-skin="square" data-color="red" disabled />Disabled
										</label>
										<label class="radio">
											<input type="radio" name="radio13" data-style="icheck" data-skin="square" data-color="red" disabled checked />Disabled & Checked
										</label>
									</div>
									<div class="span3">
										<label class="radio">
											<input type="radio" name="radio14" data-style="icheck" data-skin="square" data-color="green" />Default
										</label>
										<label class="radio">
											<input type="radio" name="radio14" data-style="icheck" data-skin="square" data-color="green" checked />Checked
										</label>
										<label class="radio">
											<input type="radio" name="radio15" data-style="icheck" data-skin="square" data-color="green" disabled />Disabled
										</label>
										<label class="radio">
											<input type="radio" name="radio15" data-style="icheck" data-skin="square" data-color="green" disabled checked />Disabled & Checked
										</label>
									</div>
									<div class="span3">
										<label class="radio">
											<input type="radio" name="radio16" data-style="icheck" data-skin="square" data-color="blue" />Default
										</label>
										<label class="radio">
											<input type="radio" name="radio16" data-style="icheck" data-skin="square" data-color="blue" checked />Checked
										</label>
										<label class="radio">
											<input type="radio" name="radio17" data-style="icheck" data-skin="square" data-color="blue" disabled />Disabled
										</label>
										<label class="radio">
											<input type="radio" name="radio17" data-style="icheck" data-skin="square" data-color="blue" disabled checked />Disabled & Checked
										</label>
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	 </div>
	<!-- end mainbar -->
</div>
<!-- end container -->
<?php include_once 'script.php' ?>
<?php include_once 'footer.php' ?>