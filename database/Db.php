
<?php

interface Db {
    public function select($query);
    public function selectAll($query);
    public function update($query);
    public function delete($query);
}
?>