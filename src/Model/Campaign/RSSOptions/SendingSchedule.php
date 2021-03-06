<?php

namespace Stefna\Mailchimp\Model\Campaign\RSSOptions;

use Stefna\Mailchimp\Model\Campaign\RSSOptions\SendingSchedule\DailySendingDays;
use Stefna\Mailchimp\Other\AbstractData;

class SendingSchedule extends AbstractData
{
	/**
	 * The days of the week to send a daily RSS-to-Email campaign.
	 *
	 * @var DailySendingDays
	 */
	public $dailySend;

	/**
	 * The hour to send the campaign in local time. Acceptable hours are 0 - 23. For example, '4' would be 4AM in your account's default timezone.
	 * Example: 20.
	 *
	 * @var int
	 */
	public $hour;

	/**
	 * The day of the month to send a monthly RSS-to-Email campaign.  Acceptable days are 0-31, where '0' is always the last day of a month. Months with fewer than the selected number of days will not have an RSS campaign sent out that day. Ex. RSS-to-Email campaigns set to send on the 30th will not go out in February.
	 * Example: 15.
	 *
	 * @var number
	 */
	public $monthlySendDate;

	/**
	 * The day of the week to send a weekly RSS-to-Email campaign.
	 * Example: monday.
	 *
	 * @var string
	 */
	public $weeklySendDay;

	/**
	 * Mapping classes.
	 *
	 * @var string[]
	 */
	protected $classMap = [
		'dailySend' => DailySendingDays::class,
	];
}
