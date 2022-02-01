<?php
include_once 'models/empleado.php';
class ConsultaModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT*FROM employees");
            while ($row = $query->fetch()) {
                $item = new Empleado();
                $item->id             = $row['id'];
                $item->name           = $row['name'];
                $item->last_name      = $row['last_name'];
                $item->email          = $row['email'];
                $item->gender_id      = $row['gender_id'];
                $item->age            = $row['age'];
                $item->phone_number   = $row['phone_number'];
                $item->city           = $row['city'];
                $item->street_address = $row['street_address'];
                $item->state          = $row['state'];
                $item->postal_code    = $row['postal_code'];
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function getEmployeeId($id)
    {
        $items = [];
        $query = $this->db->connect()->prepare("SELECT * FROM employees WHERE id = $id ");
        try {
            $query->execute();

            while ($row = $query->fetch()) {
                $item = new Empleado();
                $item->id             = $row['id'];
                $item->name           = $row['name'];
                $item->last_name      = $row['last_name'];
                $item->email          = $row['email'];
                $item->gender_id      = $row['gender_id'];
                $item->age            = $row['age'];
                $item->phone_number   = $row['phone_number'];
                $item->city           = $row['city'];
                $item->street_address = $row['street_address'];
                $item->state          = $row['state'];
                $item->postal_code    = $row['postal_code'];
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function update($item)
    {
        print_r($item['name']);
        $query = $this->db->connect()->prepare("UPDATE employees SET 
                    name           = :name,
                    last_name      = :last_name,
                    email          = :email,
                    gender_id      = :gender_id,
                    age            = :age,
                    phone_number   = :phone_number,
                    city           = :city,
                    street_address = :street_address,
                    state          = :state,
                    postal_code    = :postal_code
            WHERE id = :id");

        try {
            $query->execute([
                'id'             => $item['id'],
                'name'           => $item['name'],
                'last_name'      => $item['last_name'],
                'email'          => $item['email'],
                'gender_id'      => $item['gender_id'],
                'age'            => $item['age'],
                'phone_number'   => $item['phone_number'],
                'city'           => $item['city'],
                'street_address' => $item['street_address'],
                'state'          => $item['state'],
                'postal_code'    => $item['postal_code']
            ]);
            return true;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function delete($id){
        echo $id;
        $query = $this->db->connect()->prepare("DELETE FROM employees WHERE id = $id ");

        try {
            $query->execute();
            return true;
        } catch (PDOException $e) {
            return [];
        }
    }
}
