<?php

namespace Stefna\Mailchimp\Model\Campaign;

use Stefna\Mailchimp\Other\AbstractData;

class ABSplitOptions extends AbstractData
{
	/**
	 * For campaigns split on 'From Name', the name for Group A.
	 * Example: Urist McVankab.
	 *
	 * @var string
	 */
	public $fromNameA;

	/**
	 * For campaigns split on 'From Name', the name for Group B.
	 * Example: Freddie.
	 *
	 * @var string
	 */
	public $fromNameB;

	/**
	 * How we should evaluate a winner. Based on 'opens', 'clicks', or 'manual'.
	 * Example: opens.
	 *
	 * @var string
	 */
	public $pickWinner;

	/**
	 * For campaigns split on 'From Name', the reply-to address for Group A.
	 * Example: urist.mcvankab@freddiesjokes.com.
	 *
	 * @var string
	 */
	public $replyEmailA;

	/**
	 * For campaigns split on 'From Name', the reply-to address for Group B.
	 * Example: freddie@freddiesjokes.com.
	 *
	 * @var string
	 */
	public $replyEmailB;

	/**
	 * The send time for Group A.
	 * Example: 2015-07-09T13:00:00+00:00.
	 *
	 * @var string
	 */
	public $sendTimeA;

	/**
	 * The send time for Group B.
	 * Example: 2015-07-09T08:00:00+00:00.
	 *
	 * @var string
	 */
	public $sendTimeB;

	/**
	 * The send time for the winning version.
	 * Example: 2015-07-09T18:00:00+00:00.
	 *
	 * @var string
	 */
	public $sendTimeWinner;

	/**
	 * The size of the split groups. Campaigns split based on 'schedule' are forced to have a 50/50 split. Valid split integers are between 1-50. Ex. A 10% split would result in two groups of 10% of the subscribers plus a winner sending to the remaining 80%.
	 * Example: 50.
	 *
	 * @var int
	 */
	public $splitSize;

	/**
	 * The type of AB split to run ('subject', 'from_name', or 'schedule').
	 * Example: from_name.
	 *
	 * @var string
	 */
	public $splitTest;

	/**
	 * For campaings split on 'Subject Line', the subject line for Group A.
	 * Example: Freddie Likes Jokes.
	 *
	 * @var string
	 */
	public $subjectA;

	/**
	 * For campaings split on 'Subject Line', the subject line for Group B.
	 * Example: Freddie's Jokes for the week of *|DATE|*.
	 *
	 * @var string
	 */
	public $subjectB;

	/**
	 * The amount of time to wait before picking a winner. This cannot be changed after a campaign is sent.
	 * Example: 6.
	 *
	 * @var int
	 */
	public $waitTime;

	/**
	 * How unit of time for measuring the winner ('hours' or 'days'). This cannot be changed after a campaign is sent.
	 * Example: hours.
	 *
	 * @var string
	 */
	public $waitUnits;
}
