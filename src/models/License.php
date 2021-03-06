<?php
/**
 * Craftnet CP plugin for Craft CMS 3.x
 *
 * Basic craft net integration with a CP interface
 *
 * @link      https://www.studioespresso.co
 * @copyright Copyright (c) 2018 Studio Espresso
 */

namespace studioespresso\craftnetcp\models;

use studioespresso\craftnetcp\CraftnetCp;

use Craft;
use craft\base\Model;

/**
 * CraftnetCp Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Studio Espresso
 * @package   CraftnetCp
 * @since     1.0.0
 */
class License extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $edition = 'standard';

    public $plugin;

    public $expirable = false;

    public $notes;

    public $privateNotes;

    public $count = 1;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'edition', 'plugin'], 'required'],
        ];
    }
}

