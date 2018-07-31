# Freshdesk: Create Ticket

## REQUIREMENTS

- A host that supports PHP
- A [Freshdesk Account](https://freshdesk.com/)
- A Freshdesk API Key


## HOW TO USE

1. First download the [createTicket](https://github.com/AnthonyVadala/Freshdesk-Create_Ticket/tree/master/createTicket) folder
2. Place the folder on your PHP host
3. Log into your [Freshdesk Account](https://freshdesk.com/) / Create a [Freshdesk Account](https://freshdesk.com/signup)
4. Obtain your [Freshdesk API Key](https://support.freshdesk.com/support/solutions/articles/215517-how-to-find-your-api-key) 
5. Replace the following fields in *submit.php*; "YOUR_API_KEY" and "YOUR_DOMAIN"
    ```
    // Your agent API key
    $api_key = "YOUR_API_KEY";
    // Your Freshdesk subdomain 
      // For example "example.freshdesk.com" enter "example"
    $yourdomain = "YOUR_DOMAIN";
    ```
6. Obtain your custom Freshdesk fields (if any exist) using the following methods:
   -  cURL `curl -u YOUR_API_KEY:X -X GET https://YOUR_DOMAIN.freshdesk.com/api/v2/ticket_fields > ~/Desktop/json.txt`
   - If signed in as a Freshdesk agent go to `https://YOUR_DOMAIN.freshdesk.com/api/v2/ticket_fields`
7. To use default/custom fields use the "name" field; custom fields are prepended by  `cf_`
8. Replace the example `cf_` fields in this section of *submit.php* with your own
    ```
    // Array for custom fields
    $custom_fields = array(
      "cf_custom_text_field" => $text_input,
      "cf_custom_number_field" => $number_input
    );
    ```
9. Make sure any input field changes you make in *index.php* are reflected in the POST data section in *submit.php*
    ```
    // POST data
    $text_input=$_POST['text_input'];
    $number_input=$_POST['number_input'];
    $drop_down=$_POST['drop_down'];
    $date_field=$_POST['date_field'];
    $text_area=$_POST['text_area'];
    ```
