<?php

/**
 * @author Damian Mooyman
 */
class PageCommentsNotificationsExtension extends SiteTreeExtension {
	
	public function updateSettingsFields(FieldList $fields) {
		if(CommentsNotifications::configure_page()) {
			$fields->addFieldToTab(
				'Root.Settings', 
				new TextField('CommentNotificationEmail', 'Comment Notification Email', null, 255)
			);
		}
	}
}
