## 🦓 ips-dfgrouplegend

<p  align="center">
<a  href="#description">Description 📄</a> | 
<a  href="#usage">Usage 🛠</a> | 
<a  href="#requirements">Requirements !</a> 
</p>

---

### Description
- The plugin adds a special function to return groups
- The plugin makes it easy to create your own group legend, you just create the appearance ;)

### Usage
<details>
<summary><b>Example usage in templates</b></summary>

```html
{{ $groups = []; }}
{{ $groups['admin'] = \IPS\Member::loggedIn()->groupLegendList('admin'); }}
{{ $groups['special'] = \IPS\Member::loggedIn()->groupLegendList('special'); }}
{{ $groups['normal'] = \IPS\Member::loggedIn()->groupLegendList('normal'); }}

<h3 class="ipsType_reset">
    Group Legend
</h3>
<div class="ipsWidget_inner ipsPad">
    <div class="group-legend">
        <div class="group-legend-section group-legend-section1">
            <h1>Administration</h1>
            <ul class="ipsList_reset">
                {{foreach $groups['admin'] as $group}}
                <li>
                    <a href='/members/?filter=group_$group->g_id'>
                        {$group->formattedName|raw}
                    </a>
                </li>
                {{endforeach}}
            </ul>
        </div>
        <div class="group-legend-section group-legend-section2">
            <h1>Special</h1>
            <ul class="ipsList_reset">
                {{foreach $groups['special'] as $group}}
                <li>
                    <a href='/members/?filter=group_$group->g_id'>
                        {$group->formattedName|raw}
                    </a>
                </li>
                {{endforeach}}
            </ul>
        </div>
        <div class="group-legend-section group-legend-section3">
            <h1>Normal</h1>
            <ul class="ipsList_reset">
                {{foreach $groups['mnormal'] as $group}}
                <li>
                    <a href='/members/?filter=group_$group->g_id'>
                        {$group->formattedName|raw}
                    </a>
                </li>
                {{endforeach}}
            </ul>
        </div>
    </div>
</div>
```
</details>

### Requirements
- Invision Communnity >= 4.6
