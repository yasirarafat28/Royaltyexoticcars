
@php
//$country_type='local';
 $tire_protection = $country_type.'_tire_protection';
$property_damage_insurance = $country_type.'_liability_insurance';
$liability_insurance = $country_type.'_liability_insurance';
$fuel_credit = $country_type.'_fuel_credit';
$mechanical_breakdown = $country_type.'_mechanical_breakdown_coverage';
@endphp


@if (false)
<!--
@if($country_type=='international')
    <div class="form-group">
        <label for="international_full_coverage_insurance" class="form-label">International Full Coverage Insurance</label>
        <select id="international_full_coverage_insurance" name="international_full_coverage_insurance" class="form-control selectpicker"
                data-live-search="true">
            <option value="{{$requirement->international_full_coverage_insurance_d1}}">${{number_format($requirement->international_full_coverage_insurance_d1)}} | Driver 1</option>
            <option value="{{$requirement->international_full_coverage_insurance_d2}}">${{number_format($requirement->international_full_coverage_insurance_d2)}} | Driver 2</option>

        </select>


        <small id="passwordHelpBlock" class="form-text text-muted">
            *REQUIRED FOR ALL INTERNATIONAL DRIVERS: Covers any bodily injury claim up to $1,000,000 and has full comprehensive and collision coverage with a $15,000 deductible.
        </small>
    </div>

@else

    <div class="form-group">
        <label for="liability_insurance" class="form-label">Supplemental Liability Insurance ($1,000,000 Bodily Injury Limit)</label>
        <select id="liability_insurance" name="liability_insurance" class="form-control selectpicker"
                data-live-search="true">
            <option value="{{$requirement->$liability_insurance}}"> $ {{number_format($requirement->$liability_insurance,2)}} | Yes I would like to purchase the Supplementary Liability Insurance</option>
            <option value="0">$0.00 | No I dont want to purchase the Supplementary Liability Insurance</option>
        </select>


        <small id="passwordHelpBlock" class="form-text text-muted">
            *NOTE TO ALL U.S. DRIVERS: Whether you choose to upgrade your liability coverage or not,
        </small>
    </div>
@endif

<div class="form-group">
    <label for="property_damage_waiver" class="form-label">Property Damage Waiver ($3,500 Limit)</label>
    <select id="property_damage_waiver" name="property_damage_waiver" class="form-control selectpicker"
            data-live-search="true">
        <option value="{{$requirement->$property_damage_insurance}}">${{number_format($requirement->$property_damage_insurance,2)}} | Yes I would like to purchase Property Damage Waiver</option>
        <option value="0">$0.00 | No I dont want to to purchase Property Damage Waiver</option>
    </select>
</div>-->


@endif

<div class="form-group">
    <label for="tire_protection" class="form-label">Tire Protection <i class="info-tooltip fa fa-question-circle  text-danger" data-toggle="tooltip" data-animation="true" data-placement="top"
        data-original-title="Covers cost of tire replacement, tow charges, and loss of rental time up to $1000. Tire replacement can take up to several hours depending on the location of incident, traffic conditions, and availability."></i></label>
    <select id="tire_protection" name="tire_protection" class="form-control selectpicker"
            data-live-search="true">
        <option value="{{$requirement->$tire_protection}}"> $ {{number_format($requirement->$tire_protection,2)}} | Yes I would like to buy Tire Protection</option>
        <option value="0">$0.00 | No I dont want to buy Tire Protection</option>
    </select>

</div>

<!--<div class="form-group">
    <label for="mechanical_breakdown_coverage" class="form-label">Mechanical Break Down Insurance</label>
    <select id="mechanical_breakdown_coverage" name="mechanical_breakdown_coverage" class="form-control selectpicker"
            data-live-search="true">
        <option value="{{$requirement->$mechanical_breakdown}}">${{number_format($requirement->$mechanical_breakdown,2)}} | Yes I would like to purchase Mechanical Break Down Insurance</option>
        <option value="0">$0.00 | No I would not like to purchase Mechanical Break Down Insurance</option>
        <option value="0">$0.00 | Free I would like to include Mechanical Break Down Insurance at no cost
        </option>
    </select>

    <small id="passwordHelpBlock" class="form-text text-muted">
        Covers cost of Mechanical Parts due to wear and tear, tow charges, and loss of rental time up to $1000. Mechanical Failure can take up to several hours depending on the location of incident, traffic conditions, and availability.
        *This coverage EXCLUDES mechanical failure due to customer mis-use or gross negligence operating the vehicle and customers are fully responsible for their own actions while operating a Royalty Exotic Cars vehicle.
    </small>
</div>-->

<div class="form-group">
    <label for="fuel_credit" class="form-label">Prepaid Gas Credit</label>
    <select id="fuel_credit" name="fuel_credit" class="form-control selectpicker"
            data-live-search="true">
        <option value="{{$requirement->$fuel_credit}}">${{number_format($requirement->$fuel_credit,2)}} | Yes I would like to buy this property</option>
        <option value="0">$0.00 | No I dont want to buy this property</option>
    </select>
</div>

<!--<div class="form-group">
    <label for="country" class="form-label">Destination Packages</label>
    <select id="country" name="country" class="form-control selectpicker"
            data-live-search="true">
        <option value="australia">$349.00 Grand canion test rim Arizona</option>
    </select>

    <small id="passwordHelpBlock" class="form-text text-muted">
        These packages allow you to drive outside the 100 mile radius service area.
    </small>
</div>

<div class="form-group">
    <label for="country" class="form-label">Strip Helicopter Tour</label>
    <select id="country" name="country" class="form-control selectpicker"
            data-live-search="true">
        <option value="australia">$199.00 - 1 Passenger</option>
        <option value="australia">$299.00 - 2 Passenger</option>
        <option value="australia">$349.00 - 3 Passenger</option>
        <option value="australia">$499.00 - 4 Passenger</option>
    </select>

    <small id="passwordHelpBlock" class="form-text text-muted">
        Luxury Helicopter Tours of the Las Vegas Strip are available for $149 per passenger, up to 4 passengers at a time.
    </small>
</div>-->
