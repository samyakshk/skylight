<?php 

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Collection;
use Modules\Quotes\Entities\Template;
use Modules\Quotes\Http\Controllers\TemplatesController;
use Modules\Quotes\Repository\TemplatesRepository;

class TemplatesControllerTest extends TestCase
{
    protected $blogMock;
    
    public function __call($method, $args)
    {
        if (in_array($method, ['get', 'post', 'put', 'patch', 'delete']))
        {
            return $this->call($method, $args[0]);
        }

        throw new BadMethodCallException;
    }

    public function setUp()
    {
      parent::setUp();
    }

    public function mock($class)
    {
      $mock = Mockery::mock($class);	  
      $this->app->instance($class, $mock);	  
      return $mock;
    }
    
    public function testAction_Get()
    {
        $this->get('/api/v1/quotes/templates/get');
        $this->assertResponseOk();
        
    }
}
