<?php
class Test extends TestCase
{
    //write unit test to check the method willExpireAt from file TeHelper.php
    public function testWillExpireAt()
    {
        $due_time = '2019-12-12 12:00:00';
        $created_at = '2019-12-12 10:00:00';
        $result = TeHelper::willExpireAt($due_time, $created_at);
        $this->assertEquals('2019-12-12 12:00:00', $result);
    }


    //write unit test to check the method createOrUpdate from file UserRepository.php
    public function testCreateOrUpdate()
    {
        $id = 1;
        $request = [
            'role' => 'admin',
            'name' => 'admin',
            'company_id' => 1,
            'department_id' => 1,
            'email' => 'abc@mail.com'];
        $result = UserRepository::createOrUpdate($id, $request);
        $this->assertEquals('admin', $result->user_type);
}