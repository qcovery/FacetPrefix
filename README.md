# FacetPrefix
The module adds the option of defining a prefix according to which the facet values are filtered.  
By defining a prefix that contains for example the ILN it is possible to filter the facet values
to a specific Qcovery-Installation.

## Usage
Integrate the module in the `modules` directory of VuFind and activate it by adding `FacetPrefix` to `VUFIND_LOCAL_MODULES`.  
Add a `[FacetPrefix]` section to your `facets.ini` and define separate prefixes for facets like this:
```ini
[FacetPrefix]
facet_one = "prefix_value"
facet_two = "another_prefix_value"
;building = "20"
;class_local_iln = "20:"
;collection_details = "GBV_ILN_20"
```
