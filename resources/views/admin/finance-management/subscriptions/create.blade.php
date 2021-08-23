@extends('layouts.app')

@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />
@endsection

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7"> 
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('New Subscription Plan') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-google-wallet mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.finance.dashboard') }}"> {{ __('Finance Management') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.finance.subscriptions') }}"> {{ __('Subscription Types') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('#')}}"> {{ __('New Plan') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection

@section('content')						
	<div class="row">
		<div class="col-lg-6 col-md-6 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Create New Subscription Plan') }}</h3>
				</div>
				<div class="card-body pt-5">									
					<form action="{{ route('admin.finance.subscriptions.store') }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-12">				
								<div class="input-box">	
									<h6>{{ __('Plan Type') }}<span class="text-muted">({{ __('Required') }})</span></h6>
									<select id="plan-type" name="plan-type" data-placeholder="Select Plan Type:" data-callback="hide_headings">			
										<option value="subscription" selected>Subscription</option>
									</select>
									@error('plan-type')
										<p class="text-danger">{{ $errors->first('plan-type') }}</p>
									@enderror
								</div> 							
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">						
								<div class="input-box">	
									<h6>{{ __('Plan Status') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<select id="plan-status" name="plan-status" data-placeholder="Select Plan Status:">			
										<option value="active" selected>Active</option>
										<option value="closed">Closed</option>
									</select>
									@error('plan-status')
										<p class="text-danger">{{ $errors->first('plan-status') }}</p>
									@enderror	
								</div>						
							</div>
						
						</div>

						<div class="row mt-2">							
							<div class="col-lg-6 col-md-6col-sm-12">							
								<div class="input-box">								
									<h6>{{ __('Plan Name') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="plan-name" name="plan-name" value="{{ old('plan-name') }}" required>
									</div> 
									@error('plan-name')
										<p class="text-danger">{{ $errors->first('plan-name') }}</p>
									@enderror
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6col-sm-12">							
								<div class="input-box">								
									<h6>{{ __('Price') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="cost" name="cost" value="{{ old('cost') }}" required>
									</div> 
									@error('cost')
										<p class="text-danger">{{ $errors->first('cost') }}</p>
									@enderror
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6col-sm-12">							
								<div class="input-box">								
									<h6>{{ __('PayPal Gateway Plan ID') }} <span class="text-muted">({{ __('Required for Paypal') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="paypal_gateway_plan_id" name="paypal_gateway_plan_id" value="{{ old('paypal_gateway_plan_id') }}">
									</div> 
									@error('paypal_gateway_plan_id')
										<p class="text-danger">{{ $errors->first('paypal_gateway_plan_id') }}</p>
									@enderror
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6col-sm-12">							
								<div class="input-box">								
									<h6>{{ __('Stripe Gateway Plan ID') }} <span class="text-muted">({{ __('Required for Stripe') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="stripe_gateway_plan_id" name="stripe_gateway_plan_id" value="{{ old('stripe_gateway_plan_id') }}">
									</div> 
									@error('stripe_gateway_plan_id')
										<p class="text-danger">{{ $errors->first('stripe_gateway_plan_id') }}</p>
									@enderror
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6col-sm-12">							
								<div class="input-box">								
									<h6>{{ __('Currency') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<select id="currency" name="currency" data-placeholder="Select Currency:">			
										<option value="AFA">Afghan Afghani</option>
										<option value="ALL">Albanian Lek</option>
										<option value="DZD">Algerian Dinar</option>
										<option value="AOA">Angolan Kwanza</option>
										<option value="ARS">Argentine Peso</option>
										<option value="AMD">Armenian Dram</option>
										<option value="AWG">Aruban Florin</option>
										<option value="AUD">Australian Dollar</option>
										<option value="AZN">Azerbaijani Manat</option>
										<option value="BSD">Bahamian Dollar</option>
										<option value="BHD">Bahraini Dinar</option>
										<option value="BDT">Bangladeshi Taka</option>
										<option value="BBD">Barbadian Dollar</option>
										<option value="BYR">Belarusian Ruble</option>
										<option value="BEF">Belgian Franc</option>
										<option value="BZD">Belize Dollar</option>
										<option value="BMD">Bermudan Dollar</option>
										<option value="BTN">Bhutanese Ngultrum</option>
										<option value="BOB">Bolivian Boliviano</option>
										<option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
										<option value="BWP">Botswanan Pula</option>
										<option value="BRL">Brazilian Real</option>
										<option value="GBP">British Pound Sterling</option>
										<option value="BND">Brunei Dollar</option>
										<option value="BGN">Bulgarian Lev</option>
										<option value="BIF">Burundian Franc</option>
										<option value="KHR">Cambodian Riel</option>
										<option value="CAD">Canadian Dollar</option>
										<option value="CVE">Cape Verdean Escudo</option>
										<option value="KYD">Cayman Islands Dollar</option>
										<option value="XOF">CFA Franc BCEAO</option>
										<option value="XAF">CFA Franc BEAC</option>
										<option value="XPF">CFP Franc</option>
										<option value="CLP">Chilean Peso</option>
										<option value="CNY">Chinese Yuan</option>
										<option value="COP">Colombian Peso</option>
										<option value="KMF">Comorian Franc</option>
										<option value="CDF">Congolese Franc</option>
										<option value="CRC">Costa Rican ColÃ³n</option>
										<option value="HRK">Croatian Kuna</option>
										<option value="CUC">Cuban Convertible Peso</option>
										<option value="CZK">Czech Republic Koruna</option>
										<option value="DKK">Danish Krone</option>
										<option value="DJF">Djiboutian Franc</option>
										<option value="DOP">Dominican Peso</option>
										<option value="XCD">East Caribbean Dollar</option>
										<option value="EGP">Egyptian Pound</option>
										<option value="ERN">Eritrean Nakfa</option>
										<option value="EEK">Estonian Kroon</option>
										<option value="ETB">Ethiopian Birr</option>
										<option value="EUR">Euro</option>
										<option value="FKP">Falkland Islands Pound</option>
										<option value="FJD">Fijian Dollar</option>
										<option value="GMD">Gambian Dalasi</option>
										<option value="GEL">Georgian Lari</option>
										<option value="DEM">German Mark</option>
										<option value="GHS">Ghanaian Cedi</option>
										<option value="GIP">Gibraltar Pound</option>
										<option value="GRD">Greek Drachma</option>
										<option value="GTQ">Guatemalan Quetzal</option>
										<option value="GNF">Guinean Franc</option>
										<option value="GYD">Guyanaese Dollar</option>
										<option value="HTG">Haitian Gourde</option>
										<option value="HNL">Honduran Lempira</option>
										<option value="HKD">Hong Kong Dollar</option>
										<option value="HUF">Hungarian Forint</option>
										<option value="ISK">Icelandic KrÃ³na</option>
										<option value="INR">Indian Rupee</option>
										<option value="IDR">Indonesian Rupiah</option>
										<option value="IRR">Iranian Rial</option>
										<option value="IQD">Iraqi Dinar</option>
										<option value="ILS">Israeli New Sheqel</option>
										<option value="ITL">Italian Lira</option>
										<option value="JMD">Jamaican Dollar</option>
										<option value="JPY">Japanese Yen</option>
										<option value="JOD">Jordanian Dinar</option>
										<option value="KZT">Kazakhstani Tenge</option>
										<option value="KES">Kenyan Shilling</option>
										<option value="KWD">Kuwaiti Dinar</option>
										<option value="KGS">Kyrgystani Som</option>
										<option value="LAK">Laotian Kip</option>
										<option value="LVL">Latvian Lats</option>
										<option value="LBP">Lebanese Pound</option>
										<option value="LSL">Lesotho Loti</option>
										<option value="LRD">Liberian Dollar</option>
										<option value="LYD">Libyan Dinar</option>
										<option value="LTL">Lithuanian Litas</option>
										<option value="MOP">Macanese Pataca</option>
										<option value="MKD">Macedonian Denar</option>
										<option value="MGA">Malagasy Ariary</option>
										<option value="MWK">Malawian Kwacha</option>
										<option value="MYR">Malaysian Ringgit</option>
										<option value="MVR">Maldivian Rufiyaa</option>
										<option value="MRO">Mauritanian Ouguiya</option>
										<option value="MUR">Mauritian Rupee</option>
										<option value="MXN">Mexican Peso</option>
										<option value="MDL">Moldovan Leu</option>
										<option value="MNT">Mongolian Tugrik</option>
										<option value="MAD">Moroccan Dirham</option>
										<option value="MZM">Mozambican Metical</option>
										<option value="MMK">Myanmar Kyat</option>
										<option value="NAD">Namibian Dollar</option>
										<option value="NPR">Nepalese Rupee</option>
										<option value="ANG">Netherlands Antillean Guilder</option>
										<option value="TWD">New Taiwan Dollar</option>
										<option value="NZD">New Zealand Dollar</option>
										<option value="NIO">Nicaraguan CÃ³rdoba</option>
										<option value="NGN">Nigerian Naira</option>
										<option value="KPW">North Korean Won</option>
										<option value="NOK">Norwegian Krone</option>
										<option value="OMR">Omani Rial</option>
										<option value="PKR">Pakistani Rupee</option>
										<option value="PAB">Panamanian Balboa</option>
										<option value="PGK">Papua New Guinean Kina</option>
										<option value="PYG">Paraguayan Guarani</option>
										<option value="PEN">Peruvian Nuevo Sol</option>
										<option value="PHP">Philippine Peso</option>
										<option value="PLN">Polish Zloty</option>
										<option value="QAR">Qatari Rial</option>
										<option value="RON">Romanian Leu</option>
										<option value="RUB">Russian Ruble</option>
										<option value="RWF">Rwandan Franc</option>
										<option value="SVC">Salvadoran ColÃ³n</option>
										<option value="WST">Samoan Tala</option>
										<option value="SAR">Saudi Riyal</option>
										<option value="RSD">Serbian Dinar</option>
										<option value="SCR">Seychellois Rupee</option>
										<option value="SLL">Sierra Leonean Leone</option>
										<option value="SGD">Singapore Dollar</option>
										<option value="SKK">Slovak Koruna</option>
										<option value="SBD">Solomon Islands Dollar</option>
										<option value="SOS">Somali Shilling</option>
										<option value="ZAR">South African Rand</option>
										<option value="KRW">South Korean Won</option>
										<option value="XDR">Special Drawing Rights</option>
										<option value="LKR">Sri Lankan Rupee</option>
										<option value="SHP">St. Helena Pound</option>
										<option value="SDG">Sudanese Pound</option>
										<option value="SRD">Surinamese Dollar</option>
										<option value="SZL">Swazi Lilangeni</option>
										<option value="SEK">Swedish Krona</option>
										<option value="CHF">Swiss Franc</option>
										<option value="SYP">Syrian Pound</option>
										<option value="STD">São Tomé and Príncipe Dobra</option>
										<option value="TJS">Tajikistani Somoni</option>
										<option value="TZS">Tanzanian Shilling</option>
										<option value="THB">Thai Baht</option>
										<option value="TOP">Tongan pa'anga</option>
										<option value="TTD">Trinidad & Tobago Dollar</option>
										<option value="TND">Tunisian Dinar</option>
										<option value="TRY">Turkish Lira</option>
										<option value="TMT">Turkmenistani Manat</option>
										<option value="UGX">Ugandan Shilling</option>
										<option value="UAH">Ukrainian Hryvnia</option>
										<option value="AED">United Arab Emirates Dirham</option>
										<option value="UYU">Uruguayan Peso</option>
										<option value="USD" selected>US Dollar</option>
										<option value="UZS">Uzbekistan Som</option>
										<option value="VUV">Vanuatu Vatu</option>
										<option value="VEF">Venezuelan BolÃ­var</option>
										<option value="VND">Vietnamese Dong</option>
										<option value="YER">Yemeni Rial</option>
										<option value="ZMK">Zambian Kwacha</option>
									</select>
									@error('currency')
										<p class="text-danger">{{ $errors->first('currency') }}</p>
									@enderror
								</div> 						
							</div>
						</div>

						<div class="row mt-2">							
							<div class="col-lg-6 col-md-6col-sm-12">							
								<div class="input-box">								
									<h6>{{ __('Included Characters') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="characters" name="characters" value="{{ old('characters') }}" required>
									</div> 
									@error('characters')
										<p class="text-danger">{{ $errors->first('characters') }}</p>
									@enderror
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6col-sm-12">							
								<div class="input-box">								
									<h6>{{ __('Bonus Characters') }} <span class="text-muted">({{ __('Optional') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="bonus" name="bonus" value="{{ old('bonus') }}" value="0">
									</div> 
									@error('bonus')
										<p class="text-danger">{{ $errors->first('bonus') }}</p>
									@enderror
								</div> 						
							</div>
						</div>

						<div class="row mt-6">
							<div class="col-12">
								<div class="input-box">	
									<h6>{{ __('Primary Heading') }} <span class="text-muted">({{ __('Optional') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="primary-heading" name="primary-heading" value="{{ old('primary-heading') }}">
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-12">
								<div class="input-box">	
									<h6>{{ __('Secondary Heading') }} <span class="text-muted">({{ __('Optional') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="secondary-heading" name="secondary-heading" value="{{ old('secondary-heading') }}">
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-6">
							<div class="col-lg-12 col-md-12 col-sm-12">	
								<div class="input-box">	
									<h6>{{ __('Plan Features') }} <span class="text-muted">({{ __('Required') }})</span> <span class="text-danger">({{ __('Comma Seperated') }})</span></h6>							
									<textarea class="form-control" name="features" rows="10" value="{{ old('features') }}"></textarea>
									@error('features')
										<p class="text-danger">{{ $errors->first('features') }}</p>
									@enderror	
								</div>											
							</div>
						</div>
						

						<!-- ACTION BUTTON -->
						<div class="border-0 text-right mb-2 mt-1">
							<a href="{{ route('admin.finance.subscriptions') }}" class="btn btn-cancel mr-2">{{ __('Cancel') }}</a>
							<button type="submit" class="btn btn-primary">{{ __('Create') }}</button>							
						</div>				

					</form>					
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
	<!-- Awselect JS -->
	<script src="{{URL::asset('plugins/awselect/awselect.min.js')}}"></script>
	<script src="{{URL::asset('js/awselect.js')}}"></script>
@endsection