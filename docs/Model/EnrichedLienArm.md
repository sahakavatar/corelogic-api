# EnrichedLienArm

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**initial_reset_date** | **int** | CoreLogic derived interest rate change date for an adjustable mortgage. First interest rate reset date. Format: YYYYMMDD. | [optional] 
**next_reset_date** | **int** | Next interest rate change date after first change. Format: YYYYMMDD. | [optional] 
**change_interval** | **int** | Identifies the number of intervals for interest rate changes for an adjustable mortgage. Numeric value in conjunction with MORTGAGE ARM FREQUENCY. | [optional] 
**frequency** | **string** | Indicates the measurement of time in relation to the interest rate reset/change of the adjustable mortgage. Values: W &#x3D; Weekly; M &#x3D; Monthly; Q &#x3D; Quarterly; Y &#x3D; Yearly. | [optional] 
**calculation_change** | **float** | Percentage points added to the Index rate to calculate the new interest rate. Value added to current index to determine new interest rate.  Only for adjustable rate mortgages. | [optional] 
**maximum_interest_rate** | **float** | Maximum interest rate allowed per the life of the loan.  Lifetime interest rate maximum.  Only for adjustable rate mortgages. | [optional] 
**index_type_code** | **string** | Indicates which index is used to determine the adjustable mortgage interest rate. Values: LIB &#x3D; LIBOR, CMT &#x3D; Constant Maturity Treasury, MTA &#x3D; Monthly Treasury Average, LAM &#x3D; LAMA, PRM &#x3D; Prime, DIS &#x3D; 11th District, BIL &#x3D; Treasury Bill, FNM &#x3D; FNMA (Fannie Mae), SOF &#x3D; SOFR, OTH &#x3D; Other | [optional] 
**change_percent_limit** | **float** | Maximum amount the interest rate may increase or decrease for any one adjustment period of the adjustable mortgage.  Limit on interest rate change for any single adjustment. | [optional] 
**initial_change_max_percent** | **float** | Maximum interest rate the adjustable mortgage loan rate can increase from the initial interest rate as per the recorded loan documents. Maximum allowable interest rate indicated on initial reset. | [optional] 
**lookback_period** | **int** | The number of days back from interest rate change date to acquire index value. | [optional] 
**payment_change_date** | **int** | Date of payment change (if different than interest rate change date). Format: YYYYMMDD. | [optional] 
**pay_option_indicator** | **int** | CoreLogic standardized flag that indicates if the mortgage loan has payment options such as interest only, interest and principal or interest and principal with a lump sum. Values:  0 or null &#x3D; Not Applicable, 1 &#x3D; Applicable | [optional] 
**interest_only_indicator** | **int** | CoreLogic standardized flag that indicates the mortgage loan is an interest only payment loan. &#x27;0 or null &#x3D; Not Applicable, 1 &#x3D; Applicable&#x27;. | [optional] 
**negative_amortization_indicator** | **int** | CoreLogic standardized flag that indicates if the mortgage loan has a negative amortization clause. &#x27;0 or null &#x3D; Not Applicable, 1 &#x3D; Applicable&#x27;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

