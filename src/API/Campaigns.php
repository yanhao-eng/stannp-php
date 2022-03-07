<?php
/**
 * 
 * 
 * 
 */

namespace Stannp\API;
use Stannp\StannpPHP as StannpPHP;



class Campaigns extends StannpPHP
{
    /**
     * Returns object with all active campaigns
     * 
     * @return JSON Encoded JSON object
     */
    public function list() 
    {
        $path = "/campaigns/list";

        return $this->getRequest($path);
    }

    /**
     * Returns object with all active campaigns
     * 
     * @param int $campaignId   Id of the specific campaign
     * @return JSON Encoded JSON object
     */
    public function get($campaignId) 
    {
        $path = "/campaigns/get";
        $params = array(
            "id" => $campaignId
        );

        return $this->getRequest($path, $params);
    }

    /**
     * Create a campaign
     * 
     * @param string $campaignName Name your campaign for reference.
     * @param string $campaignType The type of campaign this will be (a6-postcard | a5-postcard | letter).
     * @param string $templateId Template id.
     * @param string $groupId Group id.
     * 
     * @return JSON  Encoded JSON object
     */
    public function new($campaignName, $campaignType, $templateId, $groupId, $whatRecipients = "all") 
    {
        $path = "/campaigns/create";
        $params = array(
            "name" => $campaignName,
            "type" => $campaignType,
            "template_id" => $templateId,
            "group_id" => $groupId,
            "what_recipients" => $whatRecipients
        );

        return $this->postRequest($path, $params);
    }

     /**
     * Approve a campaign
     * 
     * @param string $campaignId Name your campaign for reference..
     * 
     * @return JSON  Encoded JSON object
     */
    public function approve($campaignId) 
    {
        $path = "/campaigns/approve";
        $params = array(
            "id" => $campaignId
        );

        return $this->postRequest($path, $params);
    }

     /**
     * Cost of a campaign
     * 
     * @param string $campaignId Name your campaign for reference..
     * 
     * @return JSON  Encoded JSON object
     */
    public function cost($campaignId) 
    {
        $path = "/campaigns/cost";
        $params = array(
            "id" => $campaignId
        );

        return $this->postRequest($path, $params);
    }


    /**
     * Delete a campaign
     * 
     * @param string $campaignId Name your campaign for reference..
     * 
     * @return JSON  Encoded JSON object
     */
    public function delete($campaignId) 
    {
        $path = "/campaigns/delete";
        $params = array(
            "id" => $campaignId
        );

        return $this->postRequest($path, $params);
    }
}