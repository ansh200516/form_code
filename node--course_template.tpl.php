<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix node-mt"<?php print $attributes; ?>>
    <?php if ($display_submitted || (module_exists('comment') && ($node->comment == COMMENT_NODE_OPEN || ($node->comment == COMMENT_NODE_CLOSED && $node->comment_count > 0)))): ?>
    <div class="post-submitted-info">
        
        <?php if ($display_submitted): ?>
        <div class="submitted-date">
          <?php $custom_month = format_date($node->created, 'custom', 'M'); ?>
          <?php $custom_day = format_date($node->created, 'custom', 'd'); ?>
          <?php $custom_year = format_date($node->created, 'custom', 'Y'); ?>
          <div class="month"><?php print $custom_month; ?></div>
          <div class="day"><?php print $custom_day; ?></div>
          <div class="year"><?php print $custom_year; ?></div>
        </div>
        <?php endif;?>
        <?php if (module_exists('comment') && ($node->comment == COMMENT_NODE_OPEN || ($node->comment == COMMENT_NODE_CLOSED && $node->comment_count > 0))): ?>
        <div class="comments-count">
          <i class="fa fa-comment"></i>
          <div class="comment-counter"><?php print $node->comment_count; ?></div>
        </div>
        <?php endif;?>
    </div>
  <?php endif;?>
    <?php if ($display_submitted || (module_exists('comment') && ($node->comment == COMMENT_NODE_OPEN || ($node->comment == COMMENT_NODE_CLOSED && $node->comment_count > 0)))) { ?>
    <div class="node-main-content custom-width clearfix">
    <?php } else { ?>
    <div class="node-main-content full-width clearfix">
    <?php } ?>
    <?php if ($title_prefix || $title_suffix || $display_submitted || !$page): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
          <div class="submitted-user">
          <?php print t('By !username', array('!username' => $name)); ?>
          </div>
      <?php endif; ?>
        
      <?php print $user_picture; ?> 

    </header>
    <?php endif; ?>

    <div class="content"<?php print $content_attributes; ?>>
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        hide($content['field_image']);
        print render($content);

      ?>
    </div>
        <!-- If signed in then show the generate button -->
        <?php if(user_is_logged_in()): ?>
        <!-- Get all field values to create a hidden form -->
        <?php
        /* Get field values  */
        //$dpt = field_view_field('node', $node, 'field_crs_tpl_dpt');
        /* render field value */
        //print render($dpt);

        /* Alternative approach to get a field value */
        $node_wrapper = entity_metadata_wrapper('node', $node);
        $dpt = $node_wrapper->field_crs_tpl_dpt->value();
        $title = $node_wrapper->field_crs_tpl_course_title->value();
        $ltp = $node_wrapper->field_crs_tpl_ltp_structure->value();
        $credits = $node_wrapper->field_crs_tpl_credit->value();
        $number = $node_wrapper->field_crs_tpl_course_number->value();
        $non_graded = $node_wrapper->field_crs_tpl_non_graded->value();
        $course_status = $node_wrapper->field_crs_tpl_course_status->value();
        $inst_core = $node_wrapper->field_crs_tpl_inst_core->value();
        $prog_linked_core = $node_wrapper->field_crs_tpl_prog_linked_core->value();
        $dept_core = $node_wrapper->field_crs_tpl_dept_core->value();
        $dept_elec = $node_wrapper->field_crs_tpl_dept_elec->value();
        $minor_core = $node_wrapper->field_crs_tpl_minor_core->value();
        $minor_elec = $node_wrapper->field_crs_tpl_minor_elec->value();
        $prog_core = $node_wrapper->field_crs_tpl_prog_core->value();
        $prog_elec = $node_wrapper->field_crs_tpl_prog_elec->value();
        $open_cat = $node_wrapper->field_crs_tpl_open_cat->value();
        $pre_req = $node_wrapper->field_crs_tpl_pre_req->value();
        $precluded = $node_wrapper->field_crs_tpl_courses_precluded->value();
        $overlap_own = $node_wrapper->field_crs_tpl_overlap_own->value();
        $overlap_other = $node_wrapper->field_crs_tpl_overlap_other->value();
        $supersedes = $node_wrapper->field_crs_tpl_supersedes->value();
        $not_allowed = $node_wrapper->field_crs_tpl_not_allowed->value();
        $freq_offering = $node_wrapper->field_crs_tpl_freq_offer->value();
        $faculty = $node_wrapper->field_crs_tpl_faculty->value();
        $visiting = $node_wrapper->field_crs_tpl_visiting->value();
        $objectives = $node_wrapper->field_crs_tpl_objective->value();
        $contents = $node_wrapper->field_crs_tpl_contents->value();
        $contents = $contents["safe_value"];
        $lecture_outline = $node_wrapper->field_crs_tpl_lecture_outline->value();
        $tot_lecture_hr = $node_wrapper->field_crs_tpl_tot_lecture->value();
        $tute_outline = $node_wrapper->field_crs_tpl_tute_outline->value();
        $tot_tute_hr = $node_wrapper->field_crs_tpl_tot_tute->value();
        $prac_outline = $node_wrapper->field_crs_tpl_prac_outline->value();
        $tot_prac_hr = $node_wrapper->field_crs_tpl_tot_prac->value();
        $self_learning = $node_wrapper->field_crs_tpl_self_learning->value();
        $references = $node_wrapper->field_crs_tpl_references->value();
        $references = $references["safe_value"];
        //$references = field_view_field('node', $node, 'field_crs_tpl_references');
        $software = $node_wrapper->field_crs_tpl_software->value();
        $hardware = $node_wrapper->field_crs_tpl_hardware->value();
        $teaching_aids = $node_wrapper->field_crs_tpl_teaching_aids->value();
        $laboratory = $node_wrapper->field_crs_tpl_laboratory->value();
        $equipment = $node_wrapper->field_crs_tpl_equipment->value();
        $class_infra = $node_wrapper->field_crs_tpl_class_infra->value();
        $site_visits = $node_wrapper->field_crs_tpl_site_visits->value();
        $other_resources = $node_wrapper->field_crs_tpl_other_resources->value();
        $design_type = $node_wrapper->field_crs_tpl_design_type->value();
        $open_ended = $node_wrapper->field_crs_tpl_open_ended->value();
        $project_type = $node_wrapper->field_crs_tpl_project_type->value();
        $open_ended_lab = $node_wrapper->field_crs_tpl_open_ended_lab->value();
        $other_content = $node_wrapper->field_crs_tpl_other_content->value();
        $approval_status = $node_wrapper->field_crs_tpl_approval_status->value(); 
        
        /*
        $lecture_items = $node_wrapper->field_crs_tpl_lecture_outline->value();
        foreach ($lecture_items as $item) {
            $collection = entity_metadata_wrapper('field_collection_item', $item);
            $module_no = $collection->field_crs_tpl_module_no->value();
            $module_des = $collection->field_crs_tpl_module_des->value();
            $module_hrs = $collection->field_crs_tpl_module_hrs->value();
            print $module_no;
            print $module_des;
            print $module_hrs;
            print '<br/>';
        }
        */
        /*
        $lecture = $node_wrapper->field_crs_tpl_lecture_outline[0]->value();
        $collection = entity_metadata_wrapper('field_collection_item', $lecture);
        $module_no = $collection->field_crs_tpl_module_no->value();
        $module_des = $collection->field_crs_tpl_module_des->value();
        $module_hrs = $collection->field_crs_tpl_module_hrs->value();
        print $module_no;
        print $module_des;
        print $module_hrs;
        */
    
        

        //echo '<pre>'; echo var_dump($references); echo '</pre>';


        ?>
        <!-- Create a hiden form to pass all field values to use it with RTF template -->
        <div>
        <form action="https://hss.iitd.ac.in/sites/all/modules/course_template/download.php" method="post">
        <input type="hidden" name="department" value="<?php print $dpt; ?>" />
        <input type="hidden" name="title" value="<?php print $title; ?>" />
        <input type="hidden" name="ltp" value="<?php print $ltp; ?>" />
        <input type="hidden" name="credits" value="<?php print $credits; ?>" />
        <input type="hidden" name="number" value="<?php print $number; ?>" />
        <input type="hidden" name="non_graded" value="<?php print $non_graded; ?>" />
        <input type="hidden" name="course_status" value="<?php print $course_status; ?>" />
        <input type="hidden" name="inst_core" value="<?php print $inst_core; ?>" />
        <input type="hidden" name="prog_linked_core" value="<?php print $prog_linked_core; ?>" />
        <input type="hidden" name="dept_core" value="<?php print $dept_core; ?>" />
        <input type="hidden" name="dept_elec" value="<?php print $dept_elec; ?>" />
        <input type="hidden" name="minor_core" value="<?php print $minor_core; ?>" />
        <input type="hidden" name="minor_elec" value="<?php print $minor_elec; ?>" />
        <input type="hidden" name="prog_core" value="<?php print $prog_core; ?>" />
        <input type="hidden" name="prog_elec" value="<?php print $prog_elec; ?>" />
        <input type="hidden" name="open_cat" value="<?php print $open_cat; ?>" />
        <input type="hidden" name="pre_req" value="<?php print $pre_req; ?>" />
        <input type="hidden" name="precluded" value="<?php print $precluded; ?>" />
        <input type="hidden" name="overlap_own" value="<?php print $overlap_own; ?>" />
        <input type="hidden" name="overlap_other" value="<?php print $overlap_other; ?>" />
        <input type="hidden" name="supersedes" value="<?php print $supersedes; ?>" />
        <input type="hidden" name="not_allowed" value="<?php print $not_allowed; ?>" />
        <input type="hidden" name="freq_offering" value="<?php print $freq_offering; ?>" />
        <input type="hidden" name="faculty" value="<?php print $faculty; ?>" />
        <input type="hidden" name="visiting" value="<?php print $visiting; ?>" />
        
        <textarea style="display:none;" name="objectives"><?php print $objectives; ?></textarea>
        <textarea style="display:none;" name="contents"><?php print $contents; ?></textarea>
            
        <?php 
        foreach ($lecture_outline as $item) {
            $collection = entity_metadata_wrapper('field_collection_item', $item);
            $module_no = $collection->field_crs_tpl_module_no->value();
            $module_des = $collection->field_crs_tpl_module_des->value();
            $module_hrs = $collection->field_crs_tpl_module_hrs->value();
            echo "<input type=\"hidden\" name=\"lec_module_no[]\" value=\"$module_no\" />";
            echo "<input type=\"hidden\" name=\"lec_module_des[]\" value=\"$module_des\" />";
            echo "<input type=\"hidden\" name=\"lec_module_hrs[]\" value=\"$module_hrs\" />";
        }
        ?>               
        <input type="hidden" name="tot_lecture_hr" value="<?php print $tot_lecture_hr; ?>" />
        <?php 
        foreach ($tute_outline as $item) {
            $collection = entity_metadata_wrapper('field_collection_item', $item);
            $module_no = $collection->field_crs_tpl_module_no->value();
            $module_des = $collection->field_crs_tpl_module_des->value();
            $module_hrs = $collection->field_crs_tpl_module_hrs->value();
            echo "<input type=\"hidden\" name=\"tute_module_no[]\" value=\"$module_no\" />";
            echo "<input type=\"hidden\" name=\"tute_module_des[]\" value=\"$module_des\" />";
            echo "<input type=\"hidden\" name=\"tute_module_hrs[]\" value=\"$module_hrs\" />";
        }
        ?>               
        <input type="hidden" name="tot_tute_hr" value="<?php print $tot_tute_hr; ?>" />
        <?php 
        foreach ($prac_outline as $item) {
            $collection = entity_metadata_wrapper('field_collection_item', $item);
            $module_no = $collection->field_crs_tpl_module_no->value();
            $module_des = $collection->field_crs_tpl_module_des->value();
            $module_hrs = $collection->field_crs_tpl_module_hrs->value();
            echo "<input type=\"hidden\" name=\"prac_module_no[]\" value=\"$module_no\" />";
            echo "<input type=\"hidden\" name=\"prac_module_des[]\" value=\"$module_des\" />";
            echo "<input type=\"hidden\" name=\"prac_module_hrs[]\" value=\"$module_hrs\" />";
        }
        ?>               
        <input type="hidden" name="tot_prac_hr" value="<?php print $tot_prac_hr; ?>" />
        <?php 
        foreach ($self_learning as $item) {
            $collection = entity_metadata_wrapper('field_collection_item', $item);
            $module_no = $collection->field_crs_tpl_module_no->value();
            $module_des = $collection->field_crs_tpl_module_des->value();
            echo "<input type=\"hidden\" name=\"self_module_no[]\" value=\"$module_no\" />";
            echo "<input type=\"hidden\" name=\"self_module_des[]\" value=\"$module_des\" />";
        }
        ?>               
        
        <textarea style="display:none;" name="references"><?php print $references; ?></textarea>
        <input type="hidden" name="software" value="<?php print $software; ?>" />
        <input type="hidden" name="hardware" value="<?php print $hardware; ?>" />
        <input type="hidden" name="teaching_aids" value="<?php print $teaching_aids; ?>" />
        <input type="hidden" name="laboratory" value="<?php print $laboratory; ?>" />
        <input type="hidden" name="equipment" value="<?php print $equipment; ?>" />
        <input type="hidden" name="class_infra" value="<?php print $class_infra; ?>" />
        <input type="hidden" name="site_visits" value="<?php print $site_visits; ?>" />
        <input type="hidden" name="other_resources" value="<?php print $other_resources; ?>" />
        <input type="hidden" name="design_type" value="<?php print $design_type; ?>" />
        <input type="hidden" name="open_ended" value="<?php print $open_ended; ?>" />
        <input type="hidden" name="project_type" value="<?php print $project_type; ?>" />
        <input type="hidden" name="open_ended_lab" value="<?php print $open_ended_lab; ?>" />
        <input type="hidden" name="other_content" value="<?php print $other_content; ?>" />
        <input type="hidden" name="approval_status" value="<?php print $approval_status; ?>" /> 
        <input type="submit" value="Generate">
        </form>
        </div>
        <?php endif; ?>
        
        

    <?php if ($links = render($content['links'])): ?>
    <footer>
    <?php print render($content['links']); ?>
    </footer>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>

</article>
