# Mymodule_Bestseller
This module creates Rest API endpoints to return Bestseller products.

## API endpoint

###  Get all Bestsellers
> GET /v1/products/bestsellers

### Get all Bestsellers filtered by date range
> GET /v1/products/bestsellers/fromDate/**date**/toDate/**date**

===============================================================================================

#### Sample Call
> GET /V1/products/bestsellers/fromDate/2018-11-21/toDate/2018-11-25?searchCriteria[pageSize]=5


#### Sample Output

```
{
   "items":[
      {
         "id":14,
         "sku":"24-WB04",
         "name":"Push It Messenger Bag",
         "attribute_set_id":15,
         "price":45,
         "status":1,
         "visibility":4,
         "type_id":"simple",
         "created_at":"2018-11-16 10:02:15",
         "updated_at":"2018-11-23 11:43:55",
         "product_links":[

         ],
         "tier_prices":[

         ],
         "custom_attributes":[
            {
               "attribute_code":"image",
               "value":"/w/b/wb04-blue-0.jpg"
            },
            {
               "attribute_code":"small_image",
               "value":"/w/b/wb04-blue-0.jpg"
            },
            {
               "attribute_code":"special_price",
               "value":"40.0000"
            },
            {
               "attribute_code":"thumbnail",
               "value":"/w/b/wb04-blue-0.jpg"
            },
            {
               "attribute_code":"special_from_date",
               "value":"2018-11-23 05:43:55"
            },
            {
               "attribute_code":"options_container",
               "value":"container2"
            },
            {
               "attribute_code":"minimal_price",
               "value":"40.0000"
            },
            {
               "attribute_code":"url_key",
               "value":"push-it-messenger-bag"
            },
            {
               "attribute_code":"gift_message_available",
               "value":"0"
            },
            {
               "attribute_code":"msrp_display_actual_price_type",
               "value":"0"
            },
            {
               "attribute_code":"required_options",
               "value":"0"
            },
            {
               "attribute_code":"has_options",
               "value":"0"
            },
            {
               "attribute_code":"image_label",
               "value":"Image"
            },
            {
               "attribute_code":"small_image_label",
               "value":"Image"
            },
            {
               "attribute_code":"thumbnail_label",
               "value":"Image"
            },
            {
               "attribute_code":"tax_class_id",
               "value":"2"
            },
            {
               "attribute_code":"quantity_and_stock_status",
               "value":"1"
            },
            {
               "attribute_code":"description",
               "value":"<p>The name says so, but the Push It Messenger Bag is much more than a busy commuter's tote. It's a closet away from home when you're pedaling from class or work to gym and back or home again. It's the perfect size and shape for laptop, folded clothes, even extra shoes.</p>\r\n<ul>\r\n<li>Adjustable crossbody strap.</li>\r\n<li>Top handle.</li>\r\n<li>Zippered interior pocket.</li>\r\n<li>Secure clip closures.</li>\r\n<li>Durable fabric construction.</li>\r\n</ul>"
            },
            {
               "attribute_code":"activity",
               "value":"20,23,8"
            },
            {
               "attribute_code":"style_bags",
               "value":"27,28"
            },
            {
               "attribute_code":"material",
               "value":"37,38"
            },
            {
               "attribute_code":"color",
               "value":"49"
            },
            {
               "attribute_code":"strap_bags",
               "value":"61,62,63,65,66,67"
            },
            {
               "attribute_code":"features_bags",
               "value":"74,75,78,79"
            },
            {
               "attribute_code":"eco_collection",
               "value":"0"
            },
            {
               "attribute_code":"performance_fabric",
               "value":"1"
            },
            {
               "attribute_code":"erin_recommends",
               "value":"0"
            },
            {
               "attribute_code":"new",
               "value":"0"
            },
            {
               "attribute_code":"sale",
               "value":"0"
            }
         ]
      },
      {
         "id":1420,
         "sku":"WS03-XS-Red",
         "name":"Iris Workout Top-XS-Red",
         "attribute_set_id":9,
         "price":29,
         "status":1,
         "visibility":1,
         "type_id":"simple",
         "created_at":"2018-11-16 10:07:19",
         "updated_at":"2018-11-23 11:30:58",
         "weight":1,
         "product_links":[

         ],
         "tier_prices":[

         ],
         "custom_attributes":[
            {
               "attribute_code":"image",
               "value":"/w/s/ws03-red_main.jpg"
            },
            {
               "attribute_code":"small_image",
               "value":"/w/s/ws03-red_main.jpg"
            },
            {
               "attribute_code":"special_price",
               "value":"20.5000"
            },
            {
               "attribute_code":"thumbnail",
               "value":"/w/s/ws03-red_main.jpg"
            },
            {
               "attribute_code":"special_from_date",
               "value":"2018-11-23 05:30:58"
            },
            {
               "attribute_code":"options_container",
               "value":"container2"
            },
            {
               "attribute_code":"minimal_price",
               "value":"20.5000"
            },
            {
               "attribute_code":"url_key",
               "value":"iris-workout-top-xs-red"
            },
            {
               "attribute_code":"gift_message_available",
               "value":"0"
            },
            {
               "attribute_code":"msrp_display_actual_price_type",
               "value":"0"
            },
            {
               "attribute_code":"required_options",
               "value":"0"
            },
            {
               "attribute_code":"has_options",
               "value":"0"
            },
            {
               "attribute_code":"tax_class_id",
               "value":"2"
            },
            {
               "attribute_code":"quantity_and_stock_status",
               "value":"1"
            },
            {
               "attribute_code":"description",
               "value":"<p>The Iris Workout Top is sleeveless, body fitting and moisture wicking for a fashionable, functional garment. Rouched textures add style.</p>\r\n<p>&bull; Pink heather rouched v-neck.<br />&bull; Scoop neckline.<br />&bull; Angled flat seams.<br />&bull; Moisture wicking.<br />&bull; Body skimming.<br />&bull; 83% Polyester / 11% TENCEL&reg; Lyocell / 6% Lycra&reg; Spandex.</p>"
            },
            {
               "attribute_code":"size",
               "value":"167"
            },
            {
               "attribute_code":"color",
               "value":"58"
            },
            {
               "attribute_code":"eco_collection",
               "value":"0"
            },
            {
               "attribute_code":"performance_fabric",
               "value":"0"
            },
            {
               "attribute_code":"erin_recommends",
               "value":"0"
            },
            {
               "attribute_code":"new",
               "value":"0"
            },
            {
               "attribute_code":"sale",
               "value":"0"
            }
         ]
      }
   ],
   "search_criteria":{
      "filter_groups":[

      ],
      "page_size":5
   },
   "total_count":2
}
```