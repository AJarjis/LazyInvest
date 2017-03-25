<?php
    // A class which models a stock company
    class stock {
        var $ticker;
        var $company;
        var $price;
        var $volatility;
        var $sustainability;
        var $location;
        var $industry;
        
        function __construct($ticker, $company, $price, $volatility, $sustainability, $location, $industry) {
            $this->ticker = $ticker;
            $this->company = $company;
            $this->price = $price;
            $this->volatility = $volatility;
            $this->sustainability = $sustainability;
            $this->location = $location;
            $this->industry = $industry;
        }

        function getTicker() {
            return $this->ticker;
        }

        function getCompany() {
            return $this->company;
        }

        function getPrice() {
            return $this->price;
        }

        function getVolatility() {
            return $this->volatility;
        }

        function getSustainability() {
            return $this->sustainability;
        }

        function getLocation() {
            return $this->location;
        }

        function getIndustry() {
            return $this->industry;
        }

        // Returns all 
        function toString() {
            return ($this->ticker . " , " .$this->company . " , " .$this->price . " , " .$this->volatility . " , " .$this->sustainability . " , " .$this->location . " , " .$this->industry);
        }
    }

    $file = file("../csv/companyList.csv");
    $data = [];
    $index = 0;

    /* Loops through each line of the file and constructs a stock object with data provided in each row*/
    foreach ($file as $line) {
        $data[] = str_getcsv($line);

        $ticker = $data[$index][0];
        $company = $data[$index][1];
        $price = $data[$index][2];
        $volatility = $data[$index][3];
        $sustainability = $data[$index][4];
        $location = $data[$index][5];
        $industry = $data[$index][6];

        $$ticker = new stock($ticker, $company, $price, $volatility, $sustainability, $location, $industry);

        $index++;
    }

    // Test string - DELETE ME AT SOME POINT
    print($FB->toString());

?>