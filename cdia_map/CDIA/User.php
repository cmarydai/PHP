<?php

namespace CDIA;

class User {

    public function __construct(\PDO $db) {
        $this->db = $db;
    }

    public function getAllUsers() {
    	$sql = <<<EOL

    	SELECT
    	user.*,
    	program.name as program_name,
    	status.name as status_name
    	FROM user
    	INNER JOIN program ON program.id = user.program_id
    	INNER JOIN status ON status.id = user.status_id
EOL;

    	$stmt = $this->db->prepare($sql);

        $stmt->execute();

		return json_encode($stmt->fetchAll(\PDO::FETCH_OBJ));
    }

}

?>