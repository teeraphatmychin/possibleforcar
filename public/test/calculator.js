jQuery.noConflict();
(function( $ ) {
   $(document).ready(function(){
	var productTypeLabel = 'ประเภทสินเชื่อ'
	var productTypeSubCaption = {
		c4c: 'กรุงศรี คาร์ฟอร์แคช บริการสินเชื่อเพื่อคนมีรถ',
		used: 'กรุงศรี ยูสด์คาร์ บริการสินเชื่อเช่าซื้อสำหรับรถยนต์ใหม่',
		baan: 'กรุงศรี รถบ้าน บริการสินเชื่อเพื่อรถบ้าน',
		bigbike: 'กรุงศรี บิ๊กไบค์ สินเชื่อเช่าซื้อรถ บิ๊ก ไบค์ใหม่',
		new: 'กรุงศรี นิวคาร์ บริการสินเชื่อเช่าซื้อสำหรับรถยนต์ใหม่',
		mc: 'กรุงศรี มอเตอร์ไซค์ บริการสินเชื่อเช่าซื้อรถจักรยานยนต์ใหม่'
	}
	var carPriceLabel = {
		includeVAT: 'ราคารถ (รวม VAT)',
		excludeVAT: 'ราคารถ (ไม่รวม VAT)'
	}
	var downPaymentLabel = 'เงินดาวน์ '
	var downPaymentPercentLabel = 'หรือ ดาวน์'
	var installmentsPeriodLabel = 'ระยะเวลาผ่อนชำระ'
	var interestRatePercentLabel = {
		forMonth: 'อัตราดอกเบี้ยต่อเดือน',
		forYear: 'อัตราดอกเบี้ยต่อปี'
	}
	var buyLoanLabel = {
		normal: 'ยอดจัดเช่าซื้อ',
		includeVAT: 'ยอดจัดเช่าซื้อ (รวม VAT)',
		excludeVAT: 'ยอดจัดเช่าซื้อ (ไม่รวม VAT)'
	}
	var loanPerMonthLabel = 'ค่างวดต่อเดือน (รวม VAT)'
	var rate = {
		vat: 1.07,
		normal: 1
	}
	var subTitleMotorCycle = '(เฉพาะรุ่นที่กำหนด)'
	var redirectToURL = {
		c4c: 'https://www.car4cash.com/คำนวณสินเชื่อ',
		baan: 'https://www.krungsrimarket.com/CalculateLoan',
		used: 'https://www.krungsrimarket.com/CalculateLoan',
		bigbike: 'https://krungsribigbike.cjdataservice.com/home#calculator'
	}

	/***************
	 *  Element
	 **************/
	var $product_type = $('#product_type')
	var $sub_caption = $('#subCaption')

	var $car_price1 = $('#car_price1')
	var $car_price2 = $('#car_price2')
	var $car_price = $('.car_price')
	var $car_price_label1 = $('#car_price_label1 span.text')
	var $car_price_label2 = $('#car_price_label2 span.text')

	var $down_payment1 = $('#down_payment1')
	var $down_payment2 = $('#down_payment2')
	var $down_payment_label1 = $('#down_payment_label1')
	var $down_payment_label2 = $('#down_payment_label2')

	var $down_payment_percent1 = $('#down_payment_percent1')
	var $down_payment_percent2 = $('#down_payment_percent2')

	var $installments_period1 = $('#installments_period1')
	var $installments_period2 = $('#installments_period2')

	var $interest_rate_percent1 = $('#interest_rate_percent1')
	var $interest_rate_percent2 = $('#interest_rate_percent2')
	var $interest_rate_percent_label1 = $('#interest_rate_percent_label1 span.text')
	var $interest_rate_percent_label_subtitle1 = $('#interest_rate_percent_label_subtitle1')
	var $interest_rate_percent_label2 = $('#interest_rate_percent_label2 span.text')
	var $interest_rate_percent_label_subtitle2 = $('#interest_rate_percent_label_subtitle2')

	var $buy_loan1 = $('#buy_loan1')
	var $buy_loan2 = $('#buy_loan2')
	var $buy_loan_label2 = $('#buy_loan_label2')

	var $loan_per_month1 = $('#loan_per_month1')
	var $loan_per_month2 = $('#loan_per_month2')

	var $calculate_button1 = $('#calculateButton1')
	var $calculate_button2 = $('#calculateButton2')

	var $reset_button = $('.reset.btn')

	Inputmask.extendAliases({
		'percent': {
			alias: 'numeric',
			placeholder: '',
			digits: 2,
			allowPlus: false,
			allowMinus: false,
			max: 100
		}
	});

	Inputmask.extendAliases({
		'calculatorCurrency': {
			alias: 'currency',
			prefix: '',
			placeholder: '',
			digits: 0,
			groupSeparator: ',',
			digitsOptional: false,
			allowPlus: false,
			allowMinus: false,
			min: 0
		}
	});

	function init () {
		resetForm1 ()
		resetForm2 ()
		starRequired()
	}

	function resetForm1 () {
		$product_type.selectpicker('val', 'new')
		$sub_caption.html(productTypeSubCaption.new)
		$car_price1.val('')
		$down_payment_label1.addClass('new')
		$down_payment1.val('')
		$down_payment_percent1.val('')
		$down_payment1.removeAttr('readonly')
		$down_payment_percent1.removeAttr('readonly'  )
		$installments_period1.selectpicker('val', 72)
		$interest_rate_percent1.val('')
		$interest_rate_percent_label_subtitle1.val('')
		$buy_loan1.val('')
		$loan_per_month1.val('')
		$calculate_button1.attr('disabled', 'disabled')
	}

	function resetForm2 () {
		$product_type.selectpicker('val', 'new')
		$sub_caption.html(productTypeSubCaption.new)
		$car_price2.val('')
		$down_payment_label2.addClass('new')
		$down_payment2.val('')
		$down_payment_percent2.val('')
		$down_payment2.removeAttr('readonly')
		$down_payment_percent2.removeAttr('readonly')
		$installments_period2.selectpicker('val', 72)
		$interest_rate_percent2.val('')
		$buy_loan2.val('')
		$loan_per_month2.val('')
		$calculate_button2.attr('disabled', 'disabled')
	}

	function resetForm (which) {
		var whichForm = getFormContext(which)

		if ( whichForm === 'form-one' ) {
			resetForm1()
		} else {
			resetForm2()
		}
	}

	function resetResultCalculateForm1 () {
		$buy_loan1.val('')
		$loan_per_month1.val('')
	}

	function resetResultCalculateForm2 () {
		$car_price2.val('')
		$buy_loan2.val('')
	}

	function starRequired() {
		// clear first
		$("label.required").each(function () {
			$(this).find('span.star').remove()
		})
		$('<span class="star"> *</span>').insertAfter( "label:not('.required.c4c') span.text" )
	}

	function resetDownPaymentCal () {
		$car_price1.val('')
		$down_payment1.val('')
		$down_payment_percent1.val('')
	}

	function intoCurrency (value) {
      return value.replace(/,/g,"")
    }

	function updateDownPayment (target, car_price, down_payment_percent) {
		var down_payment = (down_payment_percent * car_price) / 100
		target.val(down_payment)
	}

	function updateDownPaymentPercent (target, car_price, down_payment) {
		var down_payment_percent = ( down_payment / car_price ) * 100
		if (down_payment_percent >= 100) {
			down_payment_percent = 100
			target.val(down_payment_percent)
			target.trigger('change')
		} else {
			target.val(down_payment_percent)
		}
	}

	function responseProductTypeChangeForm () {
		var props = getFormElement1()
		switch (props.product_type.value) {
			case 'c4c':
				window.location = redirectToURL.c4c;
				break

			case 'used':
				window.location = redirectToURL.used;
				break

			case 'baan':
				window.location = redirectToURL.baan;
				break

		    case 'bigbike':
		        window.location = redirectToURL.bigbike;
		        break

			case 'mc':
				$interest_rate_percent_label_subtitle1.html(subTitleMotorCycle)
				break
		}
	}

	function responseProductTypeChangeForm1() {
		var props = getFormElement1()
		$car_price_label1.html(props.car_price.label)
		$sub_caption.html(props.product_type.subCaption)
		$interest_rate_percent_label1.html(props.interest_rate_percent.label)

		$down_payment1.val('')
		$down_payment_percent1.val('')

		if ( props.down_payment_enabled ) {
			$down_payment1.removeAttr('readonly')
			$down_payment_percent1.removeAttr('readonly')
			$down_payment_label1.removeClass('c4c')
			starRequired()
		} else {
			$down_payment1.attr('readonly', 'readonly')
			$down_payment_percent1.attr('readonly', 'readonly')
			$down_payment_label1.addClass('c4c')
			starRequired()
		}

		$installments_period1.selectpicker('val', 72)
		$interest_rate_percent1.val('')
		$calculate_button1.attr('disabled', 'disabled')
		$car_price1.val('')
		$buy_loan1.val('')
		$loan_per_month1.val('')
	}

	function responseProductTypeChangeForm2() {
		var props = getFormElement2()
		$car_price_label2.html(props.car_price.label)
		$sub_caption.html(props.product_type.subCaption)
		$buy_loan_label2.html(props.buy_loan.label)

		$interest_rate_percent_label2.html(props.interest_rate_percent.label)

		if ( props.product_type.value === 'mc' ) {
			$interest_rate_percent_label_subtitle2.html(subTitleMotorCycle)
		}

		$down_payment2.val('')
		$down_payment_percent2.val('')

		if ( props.down_payment_enabled ) {
			$down_payment2.removeAttr('readonly')
			$down_payment_percent2.removeAttr('readonly')
			$down_payment_label2.removeClass('c4c')
			starRequired()
		} else {
			$down_payment2.attr('readonly', 'readonly')
			$down_payment_percent2.attr('readonly', 'readonly')
			$down_payment_label2.addClass('c4c')
			starRequired()
		}
		$installments_period2.selectpicker('val', 72)
		$interest_rate_percent2.val('')
		$calculate_button2.attr('disabled', 'disabled')
		$car_price2.val('')
		$buy_loan2.val('')
		$loan_per_month2.val('')
	}

	function getFormElement1 () {
		var product_type = $product_type.val()
		var product_type_label = productTypeLabel
		var product_type_subcaption = productTypeSubCaption[product_type]
		var car_price_amount = isNaN(parseFloat(intoCurrency($car_price1.val()))) ? 0 : parseFloat(intoCurrency($car_price1.val()))
		var car_price_value = $car_price1.val()

		var down_payment_label = downPaymentLabel
		var down_payment_amount = isNaN(parseFloat(intoCurrency($down_payment1.val()))) ? 0 : parseFloat(intoCurrency($down_payment1.val()))
		var down_payment_value = $down_payment1.val()

		var down_payment_percent_label = downPaymentPercentLabel
		var down_payment_percent_amount = isNaN(parseFloat($down_payment_percent1.val())) ? 0 : parseFloat($down_payment_percent1.val())
		var down_payment_percent_value = $down_payment_percent1.val()

		var installments_period = parseInt($installments_period1.val())

		var interest_rate_percent_amount = isNaN(parseFloat($interest_rate_percent1.val())) ? 0 : parseFloat($interest_rate_percent1.val())
		var interest_rate_percent_value = $interest_rate_percent1.val()

		var buy_loan_label = buyLoanLabel
		var installments_period_label = installmentsPeriodLabel
		var loan_per_month_label = loanPerMonthLabel

		if ( product_type === 'new' || product_type === 'mc' || product_type === 'bigbike' ) {
			var car_price_label = carPriceLabel.includeVAT
		} else {
			var car_price_label = carPriceLabel.excludeVAT
		}

		if ( product_type === 'mc' || product_type === 'bigbike' ) {
			var interest_rate_percent_label = interestRatePercentLabel.forMonth
		} else {
			var interest_rate_percent_label = interestRatePercentLabel.forYear
		}
        
        if (product_type === 'new') {
			var period = installments_period / 12
		} else {
			var period = installments_period
		}

		if ( product_type === 'c4c' || product_type === 'baan' || product_type === 'used' ) {
			var vat_rate = rate.vat;
		} else {
			var vat_rate = rate.normal
		}

		if ( product_type === 'c4c' ) {
			var downPaymentEnabled = false
		} else {
			var downPaymentEnabled = true
		}

		return {
			product_type : {
				label: product_type_label,
				subCaption: product_type_subcaption,
				value: product_type
			},

			car_price: {
				label: car_price_label,
				amount: car_price_amount,
				value: car_price_value
			},

			down_payment: {
				label: down_payment_label,
				amount: down_payment_amount,
				value: down_payment_value
			},

			down_payment_percent: {
				label: down_payment_percent_label,
				amount: down_payment_percent_amount,
				value: down_payment_percent_value
			},

			installments_period: {
				label: installments_period_label,
				amount: installments_period,
				value: installments_period
			},

			interest_rate_percent: {
				label: interest_rate_percent_label,
				amount: interest_rate_percent_amount,
				value: interest_rate_percent_value
			},

			buy_loan: {
				label: buy_loan_label,
			},

			loan_per_month: {
				label: loan_per_month_label,
			},

			vat_rate: vat_rate,
			period: period,
			down_payment_enabled: downPaymentEnabled
		}
	}

	function getFormElement2 () {
		var product_type = $product_type.val()
		var product_type_label = productTypeLabel
		var product_type_subcaption = productTypeSubCaption[product_type]

		var down_payment_label = downPaymentLabel
		var down_payment_amount = isNaN(parseFloat(intoCurrency($down_payment2.val()))) ? 0 : parseFloat(intoCurrency($down_payment2.val()))
		var down_payment_value = $down_payment2.val()

		var down_payment_percent_label = downPaymentPercentLabel
		var down_payment_percent_amount = isNaN(parseFloat($down_payment_percent2.val())) ? 0 : parseFloat($down_payment_percent2.val())
		var down_payment_percent_value = $down_payment_percent2.val()

		var installments_period = parseInt($installments_period2.val())
		var installments_period_label = installmentsPeriodLabel

		var loan_per_month_label = loanPerMonthLabel
		var loan_per_month_amount = isNaN(parseFloat(intoCurrency($loan_per_month2.val()))) ? 0 : parseFloat(intoCurrency($loan_per_month2.val()))
		var loan_per_month_value = $loan_per_month2.val()

		var interest_rate_percent_amount = isNaN(parseFloat($interest_rate_percent2.val())) ? 0 : parseFloat($interest_rate_percent2.val())
		var interest_rate_percent_value = $interest_rate_percent2.val()

		if ( product_type === 'new' || product_type === 'mc' || product_type === 'bigbike' ) {
			var car_price_label = carPriceLabel.includeVAT
		} else {
			var car_price_label = carPriceLabel.excludeVAT
		}

		if ( product_type === 'mc' || product_type === 'bigbike' ) {
			var interest_rate_percent_label = interestRatePercentLabel.forMonth
		} else {
			var interest_rate_percent_label = interestRatePercentLabel.forYear
		}

		if ( product_type === 'new' || product_type === 'mc' || product_type === 'bigbike' ) {
			var buy_loan_label = buyLoanLabel.includeVAT
		} else {
			var buy_loan_label = buyLoanLabel.excludeVAT
		}

		if (product_type === 'c4c' || product_type === 'baan' || product_type === 'new' || product_type === 'used') {
			var vat_rate = rate.vat;
			var period = installments_period /12
		} else {
			var vat_rate = rate.normal
			var period = installments_period
		}

		if ( product_type === 'c4c' ) {
			var downPaymentEnabled = false
		} else {
			var downPaymentEnabled = true
		}

		return {
			product_type : {
				label: product_type_label,
				subCaption: product_type_subcaption,
				value: product_type
			},

			car_price: {
				label: car_price_label
			},

			down_payment: {
				label: down_payment_label,
				amount: down_payment_amount,
				value: down_payment_value
			},

			down_payment_percent: {
				label: down_payment_percent_label,
				amount: down_payment_percent_amount,
				value: down_payment_percent_value
			},

			installments_period: {
				label: installments_period_label,
				amount: installments_period,
				value: installments_period
			},

			interest_rate_percent: {
				label: interest_rate_percent_label,
				amount: interest_rate_percent_amount,
				value: interest_rate_percent_value
			},

			buy_loan: {
				label: buy_loan_label,
				value: 0
			},

			loan_per_month: {
				label: loan_per_month_label,
				amount: loan_per_month_amount,
				value: loan_per_month_value
			},

			vat_rate: vat_rate,
			period: period,
			down_payment_enabled: downPaymentEnabled
		}
	}

	function getFormContext (target) {
		return $(target).parents('.form-horizontal').attr('id')
	}

	function getWhichFormElement (whichForm) {
		if ( whichForm === 'form-one' ) {
			var props = getFormElement1()
		} else {
			var props = getFormElement2()
		}

		return props
	}

	function calDownPayment (which) {
		var whichForm = getFormContext(which)
		var props = getWhichFormElement (whichForm)

		var car_price_amount = props.car_price.amount
		var down_payment = props.down_payment.amount
		var down_payment_percent = props.down_payment_percent.amount

		var car_price_type = $(which).hasClass('car_price')
		var down_payment_type = $(which).hasClass('down_payment')
		var down_payment_percent_type = $(which).hasClass('down_payment_percent')

		var down_payment_target = $(which).parents('.form-horizontal').find('.down_payment')
		var down_payment_percent_target = $(which).parents('.form-horizontal').find('.down_payment_percent')

		if ( props.down_payment_enabled ) {
			if ( car_price_amount > 0 ) {
				if ( car_price_type && down_payment > 0 ) {
					updateDownPaymentPercent(down_payment_percent_target, car_price_amount, down_payment)
				}

				if ( down_payment_type && down_payment >= 0 ) {
					updateDownPaymentPercent(down_payment_percent_target, car_price_amount, down_payment)
				}

				if ( down_payment_percent_type && down_payment_percent >= 0 ) {
					updateDownPayment(down_payment_target, car_price_amount, down_payment_percent)
				}
			} else {
				resetDownPaymentCal()
			}
		} else {
			if ( car_price_amount <= 0 ) {
				resetDownPaymentCal()
			}
		}
	}

	function readyCalculate (target) {
		var whichForm = getFormContext(target)
		var props = getWhichFormElement (whichForm)
		var button = $("#" + whichForm).find('.calculator.btn')

		if ( whichForm === 'form-one' ) {
			resetResultCalculateForm1()
		} else {
			resetResultCalculateForm2()
		}

		if ( isElementComplete (props, whichForm) ) {
			enableCalculateButton (button, true)
		} else {
			enableCalculateButton (button, false)
		}
	}

	function enableCalculateButton (button, enable) {
		if ( enable ) {
			button.removeAttr('disabled')
		} else {
			button.attr('disabled', 'disabled')
		}
	}

	function isElementComplete (item, whichForm) {
		if ( whichForm === 'form-one' ) {
			var dummy_pass = item.car_price.amount > 0 ? true : false
		} else {
			var dummy_pass = item.loan_per_month.amount > 0 ? true : false
		}

		if ( !item.down_payment_enabled ) {
			var down_payment_pass = true
			var down_payment_percent_pass = true
		} else {
			if (whichForm === 'form-one') {
				if ( item.down_payment.value === '') {
					down_payment_pass = false
				} else {
					if ( item.down_payment.amount >= 0 ) {
						down_payment_pass = true
					} else {
						down_payment_pass = false
					}
				}

				if ( item.down_payment_percent.value === '') {
					down_payment_percent_pass = false
				} else {
					if ( item.down_payment.amount >= 0 ) {
						down_payment_percent_pass = true
					} else {
						down_payment_percent_pass = false
					}
				}
			} else {
				var down_payment_pass = item.down_payment.value != '' ? true : false
				var down_payment_percent_pass = item.down_payment_percent.value != '' ? true : false
			}
		}

		var installments_period_pass = item.installments_period.amount > 0 ? true : false
		var interest_rate_percent_pass = item.interest_rate_percent.value != '' ? true : false

		if (whichForm === 'form-one') {
			var pass = dummy_pass && down_payment_pass && down_payment_percent_pass && installments_period_pass && interest_rate_percent_pass
		} else {
			var pass = dummy_pass && ( down_payment_pass || down_payment_percent_pass ) && installments_period_pass && interest_rate_percent_pass
		}

		return pass
	}

	function calculateLoan (target) {
		var whichForm = getFormContext(target)
		var props = getWhichFormElement (whichForm)

		var finance_amount = props.car_price.amount - props.down_payment.amount
		var rate_percent = props.interest_rate_percent.amount / 100
		var period = props.period
		var month = props.installments_period.amount
		var rate_vat = props.vat_rate

		var total_vat = finance_amount * rate_percent * period
		var installment = Math.ceil(( finance_amount + total_vat ) / month * rate_vat)

		$("#" + whichForm).find('.buy_loan').val(finance_amount)
		$("#" + whichForm).find('.loan_per_month').val(installment)
	}
	
	function calculateCarPrice (target) {
		var whichForm = getFormContext(target)
		var props = getWhichFormElement (whichForm)

		var loan_buy = (props.loan_per_month.amount * props.installments_period.value) / ( 1 + ( props.interest_rate_percent.value /100 ) * props.period )

		var down_payment_value = props.down_payment.value
		var down_payment_amount = props.down_payment.amount

		var down_payment_percent_value = props.down_payment_percent.value
		var down_payment_percent_amount = props.down_payment_percent.amount

		// down_payment มี และ down_payment_percent ไม่มี
		if ( down_payment_value && !down_payment_percent_value) {
			var car_cash = loan_buy + down_payment_amount
			var tmp_num = ( down_payment_amount / car_cash * 100 )
		}

		// down_payment ไม่มี และ down_payment_percent มี
		if ( !down_payment_value && down_payment_percent_value ) {
			var car_cash = loan_buy / ( 1 - ( down_payment_percent_amount / 100 ) )
			var tmp_num = ( down_payment_percent_amount / 100 ) * car_cash
		}

		// down_payment มี และ down_payment_percent มี หรือ ไม่มีทั้งคู่
		if ( (down_payment_value && down_payment_percent_value) || ( !down_payment_value && !down_payment_percent_value ) ) {
			var car_cash = loan_buy + down_payment_amount
			var tmp_num = ( down_payment_amount / car_cash * 100)
		}

		if ( props.product_type.value === 'baan' || props.product_type.value === 'used' || props.product_type.value === 'c4c' ) {
			car_cash = car_cash / props.vat_rate
			loan_buy = loan_buy / props.vat_rate
			tmp_num = tmp_num / props.vat_rate
		}

		/* กรณีที่ ไม่มี down payment แต่มี down payment percent
		*  ให้ update down payment นอกนั้น update down payment percent
		*/
		if ( !down_payment_value && down_payment_percent_value ) {
			$down_payment2.val(tmp_num)
		} else {
			// ถ้าเป็น c4c ไม่ต้อง update
			if ( props.product_type.value !== 'c4c' ) {
				$down_payment_percent2.val(tmp_num)
			}
		}

		$car_price2.val(Math.round(car_cash))
		$buy_loan2.val(Math.round(loan_buy))
	}

	$(".numeral.percent").inputmask({alias: "percent"})
	$(".numeral.price").inputmask({alias: "calculatorCurrency"})

	$product_type.on('change', function () {
		responseProductTypeChangeForm()
		responseProductTypeChangeForm1()
		responseProductTypeChangeForm2()
	})

	$car_price.on('change', function(event){
		calDownPayment (event.target)
		readyCalculate(event.target)
	})

	$loan_per_month2.on('change', function (event) {
		if ( $(this).val() <= 0 ) {
			$(this).val('')
		}
		readyCalculate(event.target)
	})

	$down_payment1.on('change', function(event){
		calDownPayment(event.target)
		readyCalculate(event.target)
	})

	$down_payment2.on('change', function(event){
		$down_payment_percent2.val('')
		readyCalculate(event.target)
	})

	$down_payment_percent1.on('change', function(event){
		calDownPayment(event.target)
		readyCalculate(event.target)
	})

	$down_payment_percent2.on('change', function(event){
		var max = 99.99
		if ($(this).val() >= 100) {
			$(this).val(max)
		}
		$down_payment2.val('')
		readyCalculate(event.target)
	})

	$installments_period1.on('change', function () {
		resetResultCalculateForm1()
	})

	$installments_period2.on('change', function () {
		resetResultCalculateForm2()
	})

	$interest_rate_percent1.on('change', function (event) {
		readyCalculate(event.target)
		resetResultCalculateForm1()
	})

	$interest_rate_percent2.on('change', function (event) {
		readyCalculate(event.target)
		resetResultCalculateForm2()
	})

	$reset_button.on('click', function (event) {
		resetForm(event.target)
	})

	$calculate_button1.on('click', function (event) {
		calculateLoan(event.target)
	})

	$calculate_button2.on('click', function (event) {
		calculateCarPrice(event.target)
	})

	init ()
});
})( jQuery );