<?php
/**
 * Created by PhpStorm.
 * User: yousan
 * Date: 1/15/16
 * Time: 4:21 PM
 */

class AP_Loader_Test extends WP_UnitTestCase {

	public function setUp() {
		parent::setUp();
	}

	public function tearDown() {
		parent::tearDown(); // TODO: Change the autogenerated stub
	}

	/**
	 *
	 * @test
	 * @group page
	 * @runInSeparateProcess
	 * @preserveGlobalState disabled
	 *
	 */
	public function testRegister_update_rewrite_rules() {
		global $wp_query;
		$loader = new AP_Loader(AP_TemplateSearcher::getTemplates());
		//$loader->
		$this->go_to( '/' );
		$this->assertQueryTrue('is_home');
	}
}