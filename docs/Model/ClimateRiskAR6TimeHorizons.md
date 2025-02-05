# ClimateRiskAR6TimeHorizons

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**time_horizon** | **int** | The climate timeframe is the timeframe for the record. (e.g., 0 represents Current, 2030, 2040, 2050) Format: YYYY | [optional] 
**average_annual_loss_ratio** | **float** | Long-term Average Annual Loss expressed as a ratio.  This represents the ratio between long-term average annual loss and replacement cost. | [optional] 
**average_annual_loss_risk_score** | **int** | Values range from 0 to 100, based on the Average Annual Loss relative to all properties in the given risk type score group (SFR, MFR, COM, IND, MUN, AGR) nationwide. 0 indicates the peril isn&#x27;t modeled for the given location. If a peril is modeled for the given location, 1 indicates the lowest risk and 100 indicates the highest risk. | [optional] 
**annual_exceedance_probability** | [**\Swagger\Client\Model\ClimateRiskAR6AnnualExceedanceProbability**](ClimateRiskAR6AnnualExceedanceProbability.md) |  | [optional] 
**occurrence_exceedance_probability** | [**\Swagger\Client\Model\ClimateRiskAR6OccurrenceExceedanceProbability**](ClimateRiskAR6OccurrenceExceedanceProbability.md) |  | [optional] 
**annual_exceedance_probability_tvar** | [**\Swagger\Client\Model\ClimateRiskAR6AnnualExceedanceProbabilityTvar**](ClimateRiskAR6AnnualExceedanceProbabilityTvar.md) |  | [optional] 
**occurrence_exceedance_probability_tvar** | [**\Swagger\Client\Model\ClimateRiskAR6OccurrenceExceedanceProbabilityTvar**](ClimateRiskAR6OccurrenceExceedanceProbabilityTvar.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

