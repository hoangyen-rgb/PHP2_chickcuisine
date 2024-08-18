<?php

namespace App\model;

use PDOException;

class xl_data extends database {
    // Read data
    function readitem($sql, $params = []) {
        $conn = $this->connection_database();
        $stmt = $conn->prepare($sql);
    
        try {
            if (!empty($params)) {
                $stmt->execute($params);
            } else {
                $stmt->execute();
            }
            
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $e) {
            // Handle the exception here, e.g. logging the error or displaying an error message
            echo "An error occurred: " . $e->getMessage();
        }
    }

    // Execute data
    function item($sql, $params = []) {
        $conn = $this->connection_database();
        $stmt = $conn->prepare($sql);

        try {
            if (!empty($params)) {
                $stmt->execute($params);
            } else {
                $stmt->execute();
            }
            
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $e) {
            // Handle the exception here, e.g. logging the error or displaying an error message
            echo "An error occurred: " . $e->getMessage();
        }
    }
}