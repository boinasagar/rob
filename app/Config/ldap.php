<?php
/*
 * LDAP Settings
 *
 */
        $config['LDAP']['Db']['Config'] = 'ldap'; //What is the name of the db config that has the LDAP credentials
        $config['LDAP']['User']['username'] = 'samaccountname';
        $config['LDAP']['User']['Identifier'] = 'sAMAccountName'; //What is the LDAP attribute that identifies the username attribute,
                                                       // openldap, iplant, netscapr use uid, AD uses samaccountname
        $config['LDAP']['Group']['Identifier'] = 'OU=Users,OU=India,DC=alliance-consulting,DC=com,OU=Users,OU=JVP,OU=Hyderabad,OU=India,DC=alliance-consulting,DC=com,OU=ACG-Fusion-Ind,OU=India,DC=alliance-consulting,DC=com,OU=India,DC=alliance-consulting,DC=com,OU=Users,OU=Boston,DC=alliance-consulting,DC=com,OU=Users,OU=Philadelphia,DC=alliance-consulting,DC=com,OU=Users,OU=Central New Jersey,DC=alliance-consulting,DC=com,OU=ACG-Fusion-US,OU=Central New Jersey,DC=alliance-consulting,DC=com,OU=Users,OU=Chicago,DC=alliance-consulting,DC=com,OU=Users,OU=New York,DC=alliance-consulting,DC=com,OU=Users,OU=IT,DC=alliance-consulting,DC=com,OU=Users,OU=Operations,DC=alliance-consulting,DC=com'; //What is the LDAP attribute that identifies the group name, usually cn
        $config['LDAP']['Model'] = 'Idbroker.LdapAuth'; //Default model to use for LDAP components
        $config['LDAP']['LdapAuth']['Model'] = 'Idbroker.LdapAuth';
        $config['LDAP']['LdapAuth']['MirrorSQL']['Users'] = 'User'; //A SQL table to duplicate ldap records in for user
        $config['LDAP']['LdapAuth']['MirrorSQL']['Groups'] = 'Group'; //A SQL table to duplicate LDAP records in for groups
        $config['LDAP']['LdapACL']['Model'] = 'Idbroker.LdapAcl';
        $config['LDAP']['LdapACL']['groupType'] = 'group';
        $config['LDAP']['groupType'] = 'groupofuniquenames'; //What object class do you use for your groups?
//        $config['LDAP']['Group']['behavior']['tree']['parent_id'] = '49db8df1-5e74-4e91-b15f-4d33e927f14e'; //Are you using a tree behavior?  Need to set the default parent_id?