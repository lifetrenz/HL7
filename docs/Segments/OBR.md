# Lifetrenz\HL7\Segments\OBR  

OBR segment class
Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-obr-segment



## Extend:

Lifetrenz\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#obr__destruct)||
|[getAssistantResultInterpreter](#obrgetassistantresultinterpreter)||
|[getChargetoPractice](#obrgetchargetopractice)||
|[getCollectionVolume](#obrgetcollectionvolume)||
|[getCollectorIdentifier](#obrgetcollectoridentifier)||
|[getCollectorsComment](#obrgetcollectorscomment)||
|[getDangerCode](#obrgetdangercode)||
|[getDiagnosticServSectID](#obrgetdiagnosticservsectid)||
|[getEscortRequired](#obrgetescortrequired)||
|[getFillerField1](#obrgetfillerfield1)||
|[getFillerField2](#obrgetfillerfield2)||
|[getFillerOrderNumber](#obrgetfillerordernumber)||
|[getID](#obrgetid)||
|[getNumberofSampleContainers](#obrgetnumberofsamplecontainers)||
|[getObservationDateTime](#obrgetobservationdatetime)||
|[getObservationEndDateTime](#obrgetobservationenddatetime)||
|[getOrderCallbackPhoneNumber](#obrgetordercallbackphonenumber)||
|[getOrderingProvider](#obrgetorderingprovider)||
|[getParent](#obrgetparent)||
|[getParentResult](#obrgetparentresult)||
|[getPlacerOrderNumber](#obrgetplacerordernumber)||
|[getPlacerfield1](#obrgetplacerfield1)||
|[getPlacerfield2](#obrgetplacerfield2)||
|[getPlannedPatientTransportComment](#obrgetplannedpatienttransportcomment)||
|[getPrincipalResultInterpreter](#obrgetprincipalresultinterpreter)||
|[getPriority](#obrgetpriority)||
|[getQuantityTiming](#obrgetquantitytiming)||
|[getReasonforStudy](#obrgetreasonforstudy)||
|[getRelevantClinicalInfo](#obrgetrelevantclinicalinfo)||
|[getRequestedDatetime](#obrgetrequesteddatetime)||
|[getResultCopiesTo](#obrgetresultcopiesto)||
|[getResultStatus](#obrgetresultstatus)||
|[getResultsRptStatusChngDateTime](#obrgetresultsrptstatuschngdatetime)||
|[getScheduledDateTime](#obrgetscheduleddatetime)||
|[getSpecimenActionCode](#obrgetspecimenactioncode)||
|[getSpecimenReceivedDateTime](#obrgetspecimenreceiveddatetime)||
|[getSpecimenSource](#obrgetspecimensource)||
|[getTechnician](#obrgettechnician)||
|[getTranscriptionist](#obrgettranscriptionist)||
|[getTransportArranged](#obrgettransportarranged)||
|[getTransportArrangementResponsibility](#obrgettransportarrangementresponsibility)||
|[getTransportLogisticsofCollectedSample](#obrgettransportlogisticsofcollectedsample)||
|[getTransportationMode](#obrgettransportationmode)||
|[getUniversalServiceID](#obrgetuniversalserviceid)||
|[resetIndex](#obrresetindex)|Reset index of this segment|
|[setAssistantResultInterpreter](#obrsetassistantresultinterpreter)||
|[setChargetoPractice](#obrsetchargetopractice)||
|[setCollectionVolume](#obrsetcollectionvolume)||
|[setCollectorIdentifier](#obrsetcollectoridentifier)||
|[setCollectorsComment](#obrsetcollectorscomment)||
|[setDangerCode](#obrsetdangercode)||
|[setDiagnosticServSectID](#obrsetdiagnosticservsectid)||
|[setEscortRequired](#obrsetescortrequired)||
|[setFillerField1](#obrsetfillerfield1)||
|[setFillerField2](#obrsetfillerfield2)||
|[setFillerOrderNumber](#obrsetfillerordernumber)||
|[setID](#obrsetid)||
|[setNumberofSampleContainers](#obrsetnumberofsamplecontainers)||
|[setObservationDateTime](#obrsetobservationdatetime)||
|[setObservationEndDateTime](#obrsetobservationenddatetime)||
|[setOrderCallbackPhoneNumber](#obrsetordercallbackphonenumber)||
|[setOrderingProvider](#obrsetorderingprovider)||
|[setParent](#obrsetparent)||
|[setParentResult](#obrsetparentresult)||
|[setPlacerOrderNumber](#obrsetplacerordernumber)||
|[setPlacerfield1](#obrsetplacerfield1)||
|[setPlacerfield2](#obrsetplacerfield2)||
|[setPlannedPatientTransportComment](#obrsetplannedpatienttransportcomment)||
|[setPrincipalResultInterpreter](#obrsetprincipalresultinterpreter)||
|[setPriority](#obrsetpriority)||
|[setQuantityTiming](#obrsetquantitytiming)||
|[setReasonforStudy](#obrsetreasonforstudy)||
|[setRelevantClinicalInfo](#obrsetrelevantclinicalinfo)||
|[setRequestedDatetime](#obrsetrequesteddatetime)||
|[setResultCopiesTo](#obrsetresultcopiesto)||
|[setResultStatus](#obrsetresultstatus)||
|[setResultsRptStatusChngDateTime](#obrsetresultsrptstatuschngdatetime)|This field specifies the date/time when the results were reported or status changed. This field is used to indicate the date and time that the results are composed into a report and released, or that a status, as defined in ORC-5 order status, is entered or changed. (This is a results field only.) When other applications (such as office or clinical database applications) query the laboratory application for untransmitted results, the information in this field may be used to control processing on the communications link. Usually, the ordering service would want only those results for which the reporting date/time is greater than the date/time the inquiring application last received results.|
|[setScheduledDateTime](#obrsetscheduleddatetime)||
|[setSpecimenActionCode](#obrsetspecimenactioncode)||
|[setSpecimenReceivedDateTime](#obrsetspecimenreceiveddatetime)||
|[setSpecimenSource](#obrsetspecimensource)||
|[setTechnician](#obrsettechnician)||
|[setTranscriptionist](#obrsettranscriptionist)||
|[setTransportArranged](#obrsettransportarranged)||
|[setTransportArrangementResponsibility](#obrsettransportarrangementresponsibility)||
|[setTransportLogisticsofCollectedSample](#obrsettransportlogisticsofcollectedsample)||
|[setTransportationMode](#obrsettransportationmode)||
|[setUniversalServiceID](#obrsetuniversalserviceid)||

## Inherited methods

| Name | Description |
|------|-------------|
|__construct|Create a segment.|
|clearField|Remove any existing value from the field|
|getField|Get the field at index.|
|getFields|Get fields from a segment|
|getName|Get the name of the segment. This is basically the value at index 0|
|setField|Set the field specified by index to value.|
|size|Get the number of fields for this segment, not including the name|



### OBR::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getAssistantResultInterpreter  

**Description**

```php
 getAssistantResultInterpreter (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getChargetoPractice  

**Description**

```php
 getChargetoPractice (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getCollectionVolume  

**Description**

```php
 getCollectionVolume (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getCollectorIdentifier  

**Description**

```php
 getCollectorIdentifier (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getCollectorsComment  

**Description**

```php
 getCollectorsComment (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getDangerCode  

**Description**

```php
 getDangerCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getDiagnosticServSectID  

**Description**

```php
 getDiagnosticServSectID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getEscortRequired  

**Description**

```php
 getEscortRequired (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getFillerField1  

**Description**

```php
 getFillerField1 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getFillerField2  

**Description**

```php
 getFillerField2 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getFillerOrderNumber  

**Description**

```php
 getFillerOrderNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getID  

**Description**

```php
 getID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getNumberofSampleContainers  

**Description**

```php
 getNumberofSampleContainers (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getObservationDateTime  

**Description**

```php
 getObservationDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getObservationEndDateTime  

**Description**

```php
 getObservationEndDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getOrderCallbackPhoneNumber  

**Description**

```php
 getOrderCallbackPhoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getOrderingProvider  

**Description**

```php
 getOrderingProvider (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getParent  

**Description**

```php
 getParent (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getParentResult  

**Description**

```php
 getParentResult (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getPlacerOrderNumber  

**Description**

```php
 getPlacerOrderNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getPlacerfield1  

**Description**

```php
 getPlacerfield1 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getPlacerfield2  

**Description**

```php
 getPlacerfield2 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getPlannedPatientTransportComment  

**Description**

```php
 getPlannedPatientTransportComment (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getPrincipalResultInterpreter  

**Description**

```php
 getPrincipalResultInterpreter (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getPriority  

**Description**

```php
 getPriority (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getQuantityTiming  

**Description**

```php
 getQuantityTiming (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getReasonforStudy  

**Description**

```php
 getReasonforStudy (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getRelevantClinicalInfo  

**Description**

```php
 getRelevantClinicalInfo (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getRequestedDatetime  

**Description**

```php
 getRequestedDatetime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getResultCopiesTo  

**Description**

```php
 getResultCopiesTo (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getResultStatus  

**Description**

```php
 getResultStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getResultsRptStatusChngDateTime  

**Description**

```php
 getResultsRptStatusChngDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getScheduledDateTime  

**Description**

```php
 getScheduledDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getSpecimenActionCode  

**Description**

```php
 getSpecimenActionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getSpecimenReceivedDateTime  

**Description**

```php
 getSpecimenReceivedDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getSpecimenSource  

**Description**

```php
 getSpecimenSource (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getTechnician  

**Description**

```php
 getTechnician (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getTranscriptionist  

**Description**

```php
 getTranscriptionist (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getTransportArranged  

**Description**

```php
 getTransportArranged (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getTransportArrangementResponsibility  

**Description**

```php
 getTransportArrangementResponsibility (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getTransportLogisticsofCollectedSample  

**Description**

```php
 getTransportLogisticsofCollectedSample (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getTransportationMode  

**Description**

```php
 getTransportationMode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getUniversalServiceID  

**Description**

```php
 getUniversalServiceID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::resetIndex  

**Description**

```php
public static resetIndex (void)
```

Reset index of this segment 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setAssistantResultInterpreter  

**Description**

```php
 setAssistantResultInterpreter (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setChargetoPractice  

**Description**

```php
 setChargetoPractice (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setCollectionVolume  

**Description**

```php
 setCollectionVolume (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setCollectorIdentifier  

**Description**

```php
 setCollectorIdentifier (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setCollectorsComment  

**Description**

```php
 setCollectorsComment (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setDangerCode  

**Description**

```php
 setDangerCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setDiagnosticServSectID  

**Description**

```php
 setDiagnosticServSectID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setEscortRequired  

**Description**

```php
 setEscortRequired (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setFillerField1  

**Description**

```php
 setFillerField1 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setFillerField2  

**Description**

```php
 setFillerField2 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setFillerOrderNumber  

**Description**

```php
 setFillerOrderNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setID  

**Description**

```php
 setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setNumberofSampleContainers  

**Description**

```php
 setNumberofSampleContainers (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setObservationDateTime  

**Description**

```php
 setObservationDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setObservationEndDateTime  

**Description**

```php
 setObservationEndDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setOrderCallbackPhoneNumber  

**Description**

```php
 setOrderCallbackPhoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setOrderingProvider  

**Description**

```php
 setOrderingProvider (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setParent  

**Description**

```php
 setParent (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setParentResult  

**Description**

```php
 setParentResult (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setPlacerOrderNumber  

**Description**

```php
 setPlacerOrderNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setPlacerfield1  

**Description**

```php
 setPlacerfield1 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setPlacerfield2  

**Description**

```php
 setPlacerfield2 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setPlannedPatientTransportComment  

**Description**

```php
 setPlannedPatientTransportComment (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setPrincipalResultInterpreter  

**Description**

```php
 setPrincipalResultInterpreter (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setPriority  

**Description**

```php
 setPriority (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setQuantityTiming  

**Description**

```php
 setQuantityTiming (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setReasonforStudy  

**Description**

```php
 setReasonforStudy (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setRelevantClinicalInfo  

**Description**

```php
 setRelevantClinicalInfo (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setRequestedDatetime  

**Description**

```php
 setRequestedDatetime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setResultCopiesTo  

**Description**

```php
 setResultCopiesTo (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setResultStatus  

**Description**

```php
 setResultStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setResultsRptStatusChngDateTime  

**Description**

```php
public setResultsRptStatusChngDateTime (void)
```

This field specifies the date/time when the results were reported or status changed. This field is used to indicate the date and time that the results are composed into a report and released, or that a status, as defined in ORC-5 order status, is entered or changed. (This is a results field only.) When other applications (such as office or clinical database applications) query the laboratory application for untransmitted results, the information in this field may be used to control processing on the communications link. Usually, the ordering service would want only those results for which the reporting date/time is greater than the date/time the inquiring application last received results. 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`bool`




<hr />


### OBR::setScheduledDateTime  

**Description**

```php
 setScheduledDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setSpecimenActionCode  

**Description**

```php
 setSpecimenActionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setSpecimenReceivedDateTime  

**Description**

```php
 setSpecimenReceivedDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setSpecimenSource  

**Description**

```php
 setSpecimenSource (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setTechnician  

**Description**

```php
 setTechnician (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setTranscriptionist  

**Description**

```php
 setTranscriptionist (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setTransportArranged  

**Description**

```php
 setTransportArranged (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setTransportArrangementResponsibility  

**Description**

```php
 setTransportArrangementResponsibility (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setTransportLogisticsofCollectedSample  

**Description**

```php
 setTransportLogisticsofCollectedSample (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setTransportationMode  

**Description**

```php
 setTransportationMode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::setUniversalServiceID  

**Description**

```php
 setUniversalServiceID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />

