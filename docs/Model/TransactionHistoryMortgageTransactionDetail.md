# TransactionHistoryMortgageTransactionDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**multi_or_split_parcel_code** | **string** | CoreLogic standardized code that identifies which parcel is being referenced in a multiple or split parcel sale. Values: EMPTY/NULL &#x3D; Not applicable, M &#x3D; First parcel of a multiple parcel transaction, D &#x3D; Subsequent parcel of a multiple parcel transaction, S &#x3D; Single parcel transaction where parcel is annotated as a portion of or with other property, Z &#x3D; Multiple parcel transaction where parcel is annotated as a portion of or with other property. | [optional] 
**primary_category_code** | **string** | CoreLogic proprietary transaction classification code that identifies the type of transaction. | [optional] 
**primary_category_code_description** | **string** | Described value of the PrimaryCategoryCode | [optional] 
**deed_category_code** | **string** | CoreLogic proprietary deed category type code that identifies the class of recorded legal document. | [optional] 
**deed_category_code_description** | **string** | Described value of the DeedCategoryCode. | [optional] 
**amount** | **float** | The amount of the mortgage at the time of the transaction. | [optional] 
**date** | **int** | Borrower&#x27;s signature date on mortgage/deed of trust.  This represents the date the borrower&#x27;s obligation to the lender begins, i.e. loan open date.  This date is the same or prior to the recording date. If the day and/or month is missing, CoreLogic populates these values with 00. Format: YYYYMMDD. | [optional] 
**recording_date** | **int** | The date the mortgage transaction was recorded at the county.  Format: YYYYMMDD. | [optional] 
**interest_rate_type_code** | **string** | CoreLogic standardized value indicating the type of mortgage interest rate. Values: NULL &#x3D; Unknown, ADJ &#x3D; Adjustable, BAL &#x3D; Balloon, FIX &#x3D; Fixed | [optional] 
**interest_rate** | **float** | Beginning interest rate per the recorded loan documents for Adjustable Rate Mortgage and the fixed interest rate for all other mortgage records. | [optional] 
**loan_type_code** | **string** | Type of loan secured (e.g., Conventional, FHA, VA). | [optional] 
**loan_type_code_description** | **string** | Describes the loanTypeCode | [optional] 
**document_type_code** | **string** | Type of deed used for recording (e.g., Mortgage, Loan Modification Agreement, Deed of Trust). | [optional] 
**document_type_code_description** | **string** | Describes the documentTypeCode. | [optional] 
**document_number** | **string** | The document number used by some counties to record mortgage transactions. | [optional] 
**document_book_number** | **string** | The Book number used by some counties to catalog their mortgage recordings. | [optional] 
**document_page_number** | **string** | The Page number used by some counties to catalog their mortgage recordings. | [optional] 
**term_code** | **string** | Code used to identify whether the number stored in MORTGAGE TERM is in days, months or years. | [optional] 
**term** | **int** | Specific time period that identifies the mortgage due or maturity term. Corresponds with the MORTGAGE TERM CODE field. | [optional] 
**due_date** | **int** | The date the mortgage becomes due. If the day and/or month is missing, CoreLogic populates these values with &#x27;00&#x27;.  Format: YYYYMMDD.  May be derived. | [optional] 
**mortgage_type_code** | **string** | CoreLogic standardized mortgage classification for principal mortgages (&#x27;P&#x27;urchase, &#x27;R&#x27;efinance) or subordinate mortgages (&#x27;J&#x27;unior). | [optional] 
**purpose_code** | **string** | CoreLogic standardized value indicating the reason for the principal or subordinate mortgage. Values: A &#x3D; Cash out first, B &#x3D; Rate/Term reduction, C &#x3D; Piggy-back on purchase, D &#x3D; Standalone subordinate, E &#x3D; First with subordinate, F &#x3D; New first mortgage, K &#x3D; Consolidation, L &#x3D; Undetermined first mortgage, M &#x3D; Undetermined standalone subordinate, N &#x3D; Piggy-back on refinance, O &#x3D; HUD reverse mortgage, P &#x3D; First trust modification, Q &#x3D; Junior trust modification, V &#x3D; Reverse mortgage | [optional] 
**subordinate_type_code** | **string** | CoreLogic standardized value indicating the type of subordinate mortgage secured. (e.g., &#x27;C&#x27;redit Line, &#x27;E&#x27;quity, Ba&#x27;L&#x27;loon) | [optional] 
**subordinate_type_code_description** | **string** | CoreLogic standardized description indicating the type of subordinate mortgage secured. (e.g. Credit Line, Equity, Balloon).  Described value of subordinateTypeCodeDescription. | [optional] 
**down_payment** | **float** | Cash down amount at time of purchase (Available in limited geographies only). | [optional] 
**lien_position** | **int** | The order a mortgage is in lien prioirty for all open mortgages. | [optional] 
**status_indicator** | **string** | Corelogic standardized value indicating if a mortgage is currently open, closed by event, in pre-foreclosure, or foreclosed. Values: R &#x3D; Mortgage Released, P &#x3D; Mortgage Paid Off, O &#x3D; Open Mortgage, U &#x3D; Foreclosed On, F &#x3D; Pre-Foreclosure Filed, Null &#x3D; Undetermined | [optional] 
**release_date** | **int** | Recording date of the mortgage Release/Reconveyance. Format: YYYYMMDD | [optional] 
**payoff_type** | **string** | Corelogic standardized value that indicates the type of event used to determine mortgage was paid in full. Values: A &#x3D; Subsequent arm length sale, B &#x3D; Subsequent non-arm length sale that is classified to pay off mortgage, C &#x3D; Paid off by a consolidation, modification and extension agreement (DocTyp &#x3D; \&quot;CE\&quot;, New York only), E &#x3D; Non-construction balloon mortgage that expired, F &#x3D; Subsequent purchase or refinance mortgage, H &#x3D; Release for the mortgage was recorded, Null &#x3D; Not paid off | [optional] 
**payoff_date** | **int** | Date of the event that paid off the mortgage in full.  The event can be a release/reconveyance (hard-close), or can be derived from logic to determine mortgage was paid in full. Format: YYYYMMDD | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

