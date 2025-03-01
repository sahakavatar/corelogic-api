# SwaggerClient-php
SDP Property API.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v2.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/git_user_id/git_repo_id.git"
    }
  ],
  "require": {
    "git_user_id/git_repo_id": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BuildingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clip = "clip_example"; // string | Unique Clip Id

try {
    $result = $apiInstance->buildings($clip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildingControllerApi->buildings: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://property.corelogicapi.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BuildingControllerApi* | [**buildings**](docs/Api/BuildingControllerApi.md#buildings) | **GET** /v2/properties/{clip}/buildings | Buildings
*BuildingPermitsControllerApi* | [**buildingPermits**](docs/Api/BuildingPermitsControllerApi.md#buildingpermits) | **GET** /v2/properties/{clip}/building-permits | BuildingPermits
*ClimateRiskAnalyticsControllerApi* | [**cRAAR5Comprehensive**](docs/Api/ClimateRiskAnalyticsControllerApi.md#craar5comprehensive) | **GET** /v2/properties/{clip}/climate-risk-analytics/ar5/comprehensive | Climate Risk Analytics - Comprehensive
*ClimateRiskAnalyticsControllerApi* | [**cRAAR6Comprehensive**](docs/Api/ClimateRiskAnalyticsControllerApi.md#craar6comprehensive) | **GET** /v2/properties/{clip}/climate-risk-analytics/ar6/comprehensive | CRA-AR6-Comprehensive
*DocumentImageControllerApi* | [**recordedDocumentImages**](docs/Api/DocumentImageControllerApi.md#recordeddocumentimages) | **GET** /v2/properties/document-images/{product} | 
*EnrichedVoluntaryLiensControllerApi* | [**openVoluntaryLiensEnriched**](docs/Api/EnrichedVoluntaryLiensControllerApi.md#openvoluntaryliensenriched) | **GET** /v2/properties/liens/enriched/{clip} | Open Voluntary Liens Enriched Risk Management
*InvoluntaryLiensControllerApi* | [**involuntaryLiens**](docs/Api/InvoluntaryLiensControllerApi.md#involuntaryliens) | **GET** /v2/properties/liens/involuntary-liens/{clipId} | 
*MortgageControllerApi* | [**currentMortgage**](docs/Api/MortgageControllerApi.md#currentmortgage) | **GET** /v2/properties/{clip}/mortgage/current | CurrentMortgage
*MortgageControllerApi* | [**mortgageHistory**](docs/Api/MortgageControllerApi.md#mortgagehistory) | **GET** /v2/properties/{clip}/mortgage | MortgageHistory
*OwnershipControllerApi* | [**ownership**](docs/Api/OwnershipControllerApi.md#ownership) | **GET** /v2/properties/{clip}/ownership | Ownership
*OwnershipTransfersControllerApi* | [**ownershipTransfers**](docs/Api/OwnershipTransfersControllerApi.md#ownershiptransfers) | **GET** /v2/properties/{clip}/ownership-transfers/{saleType}/{latest} | Ownership Transfers
*PropensityControllerApi* | [**propensityToHELOC**](docs/Api/PropensityControllerApi.md#propensitytoheloc) | **GET** /v2/properties/propensity-scores/{clip}/heloc-score | Heloc Propensity Score by clip
*PropensityControllerApi* | [**propensityToListForRent**](docs/Api/PropensityControllerApi.md#propensitytolistforrent) | **GET** /v2/properties/propensity-scores/{clip}/rent-score | Rent Propensity Score by clip
*PropensityControllerApi* | [**propensityToListForSale**](docs/Api/PropensityControllerApi.md#propensitytolistforsale) | **GET** /v2/properties/propensity-scores/{clip}/sale-score | Sales Propensity Score by clip
*PropensityControllerApi* | [**propensityToPurchaseMortgage**](docs/Api/PropensityControllerApi.md#propensitytopurchasemortgage) | **GET** /v2/properties/propensity-scores/{clip}/purchase-score | Purchase Propensity Score by clip
*PropensityControllerApi* | [**propensityToRefinance**](docs/Api/PropensityControllerApi.md#propensitytorefinance) | **GET** /v2/properties/propensity-scores/{clip}/refinance-score | Refinance Propensity Score by clip
*PropertyComparablesControllerApi* | [**comparables**](docs/Api/PropertyComparablesControllerApi.md#comparables) | **GET** /v2/properties/{clipId}/comparables | 
*PropertyControllerApi* | [**geocode**](docs/Api/PropertyControllerApi.md#geocode) | **GET** /v2/properties/search/geocode | Property search by address, city, state, zip code and apn with Geocode results
*PropertyControllerApi* | [**propertySearch**](docs/Api/PropertyControllerApi.md#propertysearch) | **GET** /v2/properties/search | Property search by address, city, state, zip code and apn
*PropertyControllerApi* | [**propertySearchByOwnerS**](docs/Api/PropertyControllerApi.md#propertysearchbyowners) | **GET** /v2/properties/search/owner | Property search by Address or APN or Owner
*PropertyDetailControllerApi* | [**propertyDetail**](docs/Api/PropertyDetailControllerApi.md#propertydetail) | **GET** /v2/properties/{clip}/property-detail | Property Detail query for multiple blocks and products.
*RentAmountModelControllerApi* | [**rentAmountModel**](docs/Api/RentAmountModelControllerApi.md#rentamountmodel) | **GET** /v2/avms/ram | Rent Amount Model
*SiteLocationControllerApi* | [**siteLocation**](docs/Api/SiteLocationControllerApi.md#sitelocation) | **GET** /v2/properties/{clip}/site-location | Site Location
*SolarAndPaceControllerApi* | [**solarAndPACELiens**](docs/Api/SolarAndPaceControllerApi.md#solarandpaceliens) | **GET** /v2/properties/liens/SolarPACE-lien/{clip} | 
*TaxAssessmentControllerApi* | [**taxAssessments**](docs/Api/TaxAssessmentControllerApi.md#taxassessments) | **GET** /v2/properties/{clip}/tax-assessments/latest | Tax Assessments
*TransactionHistoryControllerApi* | [**transactionHistory**](docs/Api/TransactionHistoryControllerApi.md#transactionhistory) | **GET** /v2/properties/{clip}/transaction-history | Transaction History Unrestricted
*TypeAheadControllerApi* | [**addressTypeAhead**](docs/Api/TypeAheadControllerApi.md#addresstypeahead) | **GET** /v2/properties/typeahead | AddressTypeAhead
*VoluntaryLiensControllerApi* | [**openLienEquityAndLTVSummary**](docs/Api/VoluntaryLiensControllerApi.md#openlienequityandltvsummary) | **GET** /v2/properties/{clip}/liens | Open Lien Equity and LTV Summary

## Documentation For Models

 - [AdditionalValues](docs/Model/AdditionalValues.md)
 - [AddressDTO](docs/Model/AddressDTO.md)
 - [AirConditioning](docs/Model/AirConditioning.md)
 - [AllBuildingsSummary](docs/Model/AllBuildingsSummary.md)
 - [AnnualExceedanceProbability](docs/Model/AnnualExceedanceProbability.md)
 - [AnnualExceedanceProbabilityTvar](docs/Model/AnnualExceedanceProbabilityTvar.md)
 - [AssessedValue](docs/Model/AssessedValue.md)
 - [Attic](docs/Model/Attic.md)
 - [Basement](docs/Model/Basement.md)
 - [BathroomFixtures](docs/Model/BathroomFixtures.md)
 - [BorrowerDetail](docs/Model/BorrowerDetail.md)
 - [BorrowerNameDetail](docs/Model/BorrowerNameDetail.md)
 - [Building](docs/Model/Building.md)
 - [BuildingData](docs/Model/BuildingData.md)
 - [BuildingPermitStatus](docs/Model/BuildingPermitStatus.md)
 - [BuildingPermits](docs/Model/BuildingPermits.md)
 - [BuildingPermitsItem](docs/Model/BuildingPermitsItem.md)
 - [BuildingResponseData](docs/Model/BuildingResponseData.md)
 - [BuyerDetails](docs/Model/BuyerDetails.md)
 - [BuyerName](docs/Model/BuyerName.md)
 - [BuyerParsedName](docs/Model/BuyerParsedName.md)
 - [Cbsa](docs/Model/Cbsa.md)
 - [Ceiling](docs/Model/Ceiling.md)
 - [CensusTract](docs/Model/CensusTract.md)
 - [ClimateRiskAR6AnnualExceedanceProbability](docs/Model/ClimateRiskAR6AnnualExceedanceProbability.md)
 - [ClimateRiskAR6AnnualExceedanceProbabilityTvar](docs/Model/ClimateRiskAR6AnnualExceedanceProbabilityTvar.md)
 - [ClimateRiskAR6ClientData](docs/Model/ClimateRiskAR6ClientData.md)
 - [ClimateRiskAR6ClientResponse](docs/Model/ClimateRiskAR6ClientResponse.md)
 - [ClimateRiskAR6OccurrenceExceedanceProbability](docs/Model/ClimateRiskAR6OccurrenceExceedanceProbability.md)
 - [ClimateRiskAR6OccurrenceExceedanceProbabilityTvar](docs/Model/ClimateRiskAR6OccurrenceExceedanceProbabilityTvar.md)
 - [ClimateRiskAR6Perils](docs/Model/ClimateRiskAR6Perils.md)
 - [ClimateRiskAR6TimeHorizons](docs/Model/ClimateRiskAR6TimeHorizons.md)
 - [ClimateRiskAnalyticsAR6](docs/Model/ClimateRiskAnalyticsAR6.md)
 - [ClimateRiskAnalyticsRcpScenarios](docs/Model/ClimateRiskAnalyticsRcpScenarios.md)
 - [CollectionPoint](docs/Model/CollectionPoint.md)
 - [CommunityCollege](docs/Model/CommunityCollege.md)
 - [ConstructionDetails](docs/Model/ConstructionDetails.md)
 - [Contractor](docs/Model/Contractor.md)
 - [CoordinatesBlock](docs/Model/CoordinatesBlock.md)
 - [CoordinatesParcel](docs/Model/CoordinatesParcel.md)
 - [CountyLienCoverageSummary](docs/Model/CountyLienCoverageSummary.md)
 - [CraComprehensiveAllDataResponse](docs/Model/CraComprehensiveAllDataResponse.md)
 - [CraComprehensiveAllPeril](docs/Model/CraComprehensiveAllPeril.md)
 - [CraComprehensiveAllResponse](docs/Model/CraComprehensiveAllResponse.md)
 - [CraComprehensiveAllRiskScenario](docs/Model/CraComprehensiveAllRiskScenario.md)
 - [CraComprehensiveAllTimeframe](docs/Model/CraComprehensiveAllTimeframe.md)
 - [CurrentOwnerMailingInfo](docs/Model/CurrentOwnerMailingInfo.md)
 - [CurrentOwners](docs/Model/CurrentOwners.md)
 - [Data](docs/Model/Data.md)
 - [DeedPropertyOwner](docs/Model/DeedPropertyOwner.md)
 - [DocumentImageResponseData](docs/Model/DocumentImageResponseData.md)
 - [DormerWindows](docs/Model/DormerWindows.md)
 - [Elementary](docs/Model/Elementary.md)
 - [EnrichedLienArm](docs/Model/EnrichedLienArm.md)
 - [EnrichedLienCurrentLender](docs/Model/EnrichedLienCurrentLender.md)
 - [EnrichedLienEstimatedPIQ](docs/Model/EnrichedLienEstimatedPIQ.md)
 - [EnrichedLienLender](docs/Model/EnrichedLienLender.md)
 - [EnrichedLienLoanIndicator](docs/Model/EnrichedLienLoanIndicator.md)
 - [EnrichedLienLoanModification](docs/Model/EnrichedLienLoanModification.md)
 - [EnrichedLienMortgageRiskTransaction](docs/Model/EnrichedLienMortgageRiskTransaction.md)
 - [EnrichedLienRecordedDocument](docs/Model/EnrichedLienRecordedDocument.md)
 - [EnrichedLienRiskEquity](docs/Model/EnrichedLienRiskEquity.md)
 - [EnrichedLienRiskTransaction](docs/Model/EnrichedLienRiskTransaction.md)
 - [EnrichedLiensCountyMortgageCoverageSummary](docs/Model/EnrichedLiensCountyMortgageCoverageSummary.md)
 - [EnrichedLiensRiskData](docs/Model/EnrichedLiensRiskData.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [ErrorResponseErrorResponse](docs/Model/ErrorResponseErrorResponse.md)
 - [EstimatedValueRange](docs/Model/EstimatedValueRange.md)
 - [Fire](docs/Model/Fire.md)
 - [FirePlaces](docs/Model/FirePlaces.md)
 - [Flooring](docs/Model/Flooring.md)
 - [Geocode](docs/Model/Geocode.md)
 - [GeocodeDetail](docs/Model/GeocodeDetail.md)
 - [GeocodeProduct](docs/Model/GeocodeProduct.md)
 - [Heating](docs/Model/Heating.md)
 - [High](docs/Model/High.md)
 - [HoaLienPlaintiff](docs/Model/HoaLienPlaintiff.md)
 - [HoaLienTransaction](docs/Model/HoaLienTransaction.md)
 - [HoaLienTransactionDetails](docs/Model/HoaLienTransactionDetails.md)
 - [HoaLienTransactionId](docs/Model/HoaLienTransactionId.md)
 - [InteriorArea](docs/Model/InteriorArea.md)
 - [InteriorRooms](docs/Model/InteriorRooms.md)
 - [InvoluntaryLiensRootResponse](docs/Model/InvoluntaryLiensRootResponse.md)
 - [Item](docs/Model/Item.md)
 - [JurisdictionCounty](docs/Model/JurisdictionCounty.md)
 - [LandUseAndZoningCodes](docs/Model/LandUseAndZoningCodes.md)
 - [LenderDetail](docs/Model/LenderDetail.md)
 - [LienEquity](docs/Model/LienEquity.md)
 - [LienOwners](docs/Model/LienOwners.md)
 - [LiensData](docs/Model/LiensData.md)
 - [Lighting](docs/Model/Lighting.md)
 - [Location](docs/Model/Location.md)
 - [LocationLegal](docs/Model/LocationLegal.md)
 - [LocationSurvey](docs/Model/LocationSurvey.md)
 - [Lot](docs/Model/Lot.md)
 - [MailingAddress](docs/Model/MailingAddress.md)
 - [MailingPropertyAddress](docs/Model/MailingPropertyAddress.md)
 - [MechanicsLienPlaintiff](docs/Model/MechanicsLienPlaintiff.md)
 - [MechanicsLienTransaction](docs/Model/MechanicsLienTransaction.md)
 - [MechanicsLienTransactionDetails](docs/Model/MechanicsLienTransactionDetails.md)
 - [MechanicsLienTransactionId](docs/Model/MechanicsLienTransactionId.md)
 - [Message](docs/Model/Message.md)
 - [Metadata](docs/Model/Metadata.md)
 - [Middle](docs/Model/Middle.md)
 - [ModelOutput](docs/Model/ModelOutput.md)
 - [MortgageArmDetail](docs/Model/MortgageArmDetail.md)
 - [MortgageCoverageSummary](docs/Model/MortgageCoverageSummary.md)
 - [MortgageDetail](docs/Model/MortgageDetail.md)
 - [MortgageRiderDetail](docs/Model/MortgageRiderDetail.md)
 - [MortgageTitleDetail](docs/Model/MortgageTitleDetail.md)
 - [MortgageTransactionDetail](docs/Model/MortgageTransactionDetail.md)
 - [MortgageTransactionIdDetail](docs/Model/MortgageTransactionIdDetail.md)
 - [MortgageTransactionIndicatorDetail](docs/Model/MortgageTransactionIndicatorDetail.md)
 - [MortgageTransactionProduct](docs/Model/MortgageTransactionProduct.md)
 - [Municipality](docs/Model/Municipality.md)
 - [NMLSDetail](docs/Model/NMLSDetail.md)
 - [Neighborhood](docs/Model/Neighborhood.md)
 - [OccurrenceExceedanceProbability](docs/Model/OccurrenceExceedanceProbability.md)
 - [OccurrenceExceedanceProbabilityTvar](docs/Model/OccurrenceExceedanceProbabilityTvar.md)
 - [OriginalSolarTransaction](docs/Model/OriginalSolarTransaction.md)
 - [OriginalTaxLienTransaction](docs/Model/OriginalTaxLienTransaction.md)
 - [OwnerMailingAddress](docs/Model/OwnerMailingAddress.md)
 - [OwnerName](docs/Model/OwnerName.md)
 - [Owners](docs/Model/Owners.md)
 - [OwnershipData](docs/Model/OwnershipData.md)
 - [OwnershipResponseData](docs/Model/OwnershipResponseData.md)
 - [OwnershipTransfers](docs/Model/OwnershipTransfers.md)
 - [OwnershipTransfersItem](docs/Model/OwnershipTransfersItem.md)
 - [OwnershipTransfersProduct](docs/Model/OwnershipTransfersProduct.md)
 - [PaceBuyerMailingAddress](docs/Model/PaceBuyerMailingAddress.md)
 - [PaceBuyerName](docs/Model/PaceBuyerName.md)
 - [PaceLienDetails](docs/Model/PaceLienDetails.md)
 - [PaceLienTransaction](docs/Model/PaceLienTransaction.md)
 - [PaceRecordId](docs/Model/PaceRecordId.md)
 - [PaceTransaction](docs/Model/PaceTransaction.md)
 - [Parking](docs/Model/Parking.md)
 - [PassengerElevators](docs/Model/PassengerElevators.md)
 - [Patio](docs/Model/Patio.md)
 - [Permit](docs/Model/Permit.md)
 - [PermitClassificationType](docs/Model/PermitClassificationType.md)
 - [Plumbing](docs/Model/Plumbing.md)
 - [Pool](docs/Model/Pool.md)
 - [Porch](docs/Model/Porch.md)
 - [PrincipalDetail](docs/Model/PrincipalDetail.md)
 - [ProgramProductCodes](docs/Model/ProgramProductCodes.md)
 - [Project](docs/Model/Project.md)
 - [PropensityData](docs/Model/PropensityData.md)
 - [PropertyAddressMatchInformation](docs/Model/PropertyAddressMatchInformation.md)
 - [PropertyApn](docs/Model/PropertyApn.md)
 - [PropertyComparablesDataResponse](docs/Model/PropertyComparablesDataResponse.md)
 - [PropertyComparablesRootResponse](docs/Model/PropertyComparablesRootResponse.md)
 - [PropertyDetailResponse](docs/Model/PropertyDetailResponse.md)
 - [PropertyDetails](docs/Model/PropertyDetails.md)
 - [PropertyMatchInfo](docs/Model/PropertyMatchInfo.md)
 - [PropertySearchAddress](docs/Model/PropertySearchAddress.md)
 - [PropertySearchByOwnerApn](docs/Model/PropertySearchByOwnerApn.md)
 - [PropertySearchByOwnerNameDetail](docs/Model/PropertySearchByOwnerNameDetail.md)
 - [PropertySearchByOwnerNameProduct](docs/Model/PropertySearchByOwnerNameProduct.md)
 - [PropertySearchDetail](docs/Model/PropertySearchDetail.md)
 - [PropertySearchProduct](docs/Model/PropertySearchProduct.md)
 - [PropertyStreetAddressParsed](docs/Model/PropertyStreetAddressParsed.md)
 - [PropertyTaxLienTransaction](docs/Model/PropertyTaxLienTransaction.md)
 - [RecordedPropertyAddress](docs/Model/RecordedPropertyAddress.md)
 - [RentAmountModelData](docs/Model/RentAmountModelData.md)
 - [RentAmountModelResponseData](docs/Model/RentAmountModelResponseData.md)
 - [ResponseMessage](docs/Model/ResponseMessage.md)
 - [ResponseMessages](docs/Model/ResponseMessages.md)
 - [Roof](docs/Model/Roof.md)
 - [School](docs/Model/School.md)
 - [SchoolDistricts](docs/Model/SchoolDistricts.md)
 - [SellerDetails](docs/Model/SellerDetails.md)
 - [SellerName](docs/Model/SellerName.md)
 - [ServiceDistricts](docs/Model/ServiceDistricts.md)
 - [Sewer](docs/Model/Sewer.md)
 - [SingleApiResponseEnrichedLiensRiskData](docs/Model/SingleApiResponseEnrichedLiensRiskData.md)
 - [SingleApiResponseLiensData](docs/Model/SingleApiResponseLiensData.md)
 - [SingleApiResponsePropensityData](docs/Model/SingleApiResponsePropensityData.md)
 - [SingleApiResponseSiteLocationData](docs/Model/SingleApiResponseSiteLocationData.md)
 - [SiteLocationData](docs/Model/SiteLocationData.md)
 - [SiteLocationResponseData](docs/Model/SiteLocationResponseData.md)
 - [SolarContractDetails](docs/Model/SolarContractDetails.md)
 - [SolarContractTransaction](docs/Model/SolarContractTransaction.md)
 - [SolarContractTransactionDetails](docs/Model/SolarContractTransactionDetails.md)
 - [SolarContractTransactionId](docs/Model/SolarContractTransactionId.md)
 - [SolarPACELiensRootResponse](docs/Model/SolarPACELiensRootResponse.md)
 - [SolarPaceLiensCountyLienCoverageSummary](docs/Model/SolarPaceLiensCountyLienCoverageSummary.md)
 - [SolarPaceLiensData](docs/Model/SolarPaceLiensData.md)
 - [SolarPaceLiensOwnerName](docs/Model/SolarPaceLiensOwnerName.md)
 - [SolarRequesterAddress](docs/Model/SolarRequesterAddress.md)
 - [SolarRequesterName](docs/Model/SolarRequesterName.md)
 - [StreetAddressParsed](docs/Model/StreetAddressParsed.md)
 - [StructureClassification](docs/Model/StructureClassification.md)
 - [StructureExterior](docs/Model/StructureExterior.md)
 - [StructureFeatures](docs/Model/StructureFeatures.md)
 - [StructureFootprint](docs/Model/StructureFootprint.md)
 - [StructureId](docs/Model/StructureId.md)
 - [StructureInterior](docs/Model/StructureInterior.md)
 - [StructureUnitsSummary](docs/Model/StructureUnitsSummary.md)
 - [StructureVerticalProfile](docs/Model/StructureVerticalProfile.md)
 - [SubjectTransaction](docs/Model/SubjectTransaction.md)
 - [SubjectTransactionDetail](docs/Model/SubjectTransactionDetail.md)
 - [Tax](docs/Model/Tax.md)
 - [TaxAmount](docs/Model/TaxAmount.md)
 - [TaxAssessment](docs/Model/TaxAssessment.md)
 - [TaxDistrict](docs/Model/TaxDistrict.md)
 - [TaxExemptions](docs/Model/TaxExemptions.md)
 - [TaxLienDetails](docs/Model/TaxLienDetails.md)
 - [TaxLienTransaction](docs/Model/TaxLienTransaction.md)
 - [TaxPayerMailingAddress](docs/Model/TaxPayerMailingAddress.md)
 - [TaxPayerName](docs/Model/TaxPayerName.md)
 - [TaxRateArea](docs/Model/TaxRateArea.md)
 - [TaxrollUpdate](docs/Model/TaxrollUpdate.md)
 - [TitleCompany](docs/Model/TitleCompany.md)
 - [Town](docs/Model/Town.md)
 - [TransactionDetails](docs/Model/TransactionDetails.md)
 - [TransactionHistoryBorrowerDetail](docs/Model/TransactionHistoryBorrowerDetail.md)
 - [TransactionHistoryBorrowerNameDetail](docs/Model/TransactionHistoryBorrowerNameDetail.md)
 - [TransactionHistoryBuyerDetails](docs/Model/TransactionHistoryBuyerDetails.md)
 - [TransactionHistoryBuyerName](docs/Model/TransactionHistoryBuyerName.md)
 - [TransactionHistoryData](docs/Model/TransactionHistoryData.md)
 - [TransactionHistoryDetails](docs/Model/TransactionHistoryDetails.md)
 - [TransactionHistoryItems](docs/Model/TransactionHistoryItems.md)
 - [TransactionHistoryLenderDetail](docs/Model/TransactionHistoryLenderDetail.md)
 - [TransactionHistoryMortgageArmDetail](docs/Model/TransactionHistoryMortgageArmDetail.md)
 - [TransactionHistoryMortgageDetail](docs/Model/TransactionHistoryMortgageDetail.md)
 - [TransactionHistoryMortgageRiderDetail](docs/Model/TransactionHistoryMortgageRiderDetail.md)
 - [TransactionHistoryMortgageTransactionDetail](docs/Model/TransactionHistoryMortgageTransactionDetail.md)
 - [TransactionHistoryPrincipalDetail](docs/Model/TransactionHistoryPrincipalDetail.md)
 - [Trash](docs/Model/Trash.md)
 - [TypeAheadResponse](docs/Model/TypeAheadResponse.md)
 - [UtilitiesType](docs/Model/UtilitiesType.md)
 - [Utility](docs/Model/Utility.md)
 - [Wall](docs/Model/Wall.md)
 - [Walls](docs/Model/Walls.md)
 - [Water](docs/Model/Water.md)

## Documentation For Authorization


## property_auth

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: 
- **Scopes**: 


## Author



