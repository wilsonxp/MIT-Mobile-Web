<?php
/**
 * Copyright (c) 2008 Massachusetts Institute of Technology
 * 
 * Licensed under the MIT License
 * Redistributions of files must retain the above copyright notice.
 * 
 */


$academic
   ->year(2007)
      ->month('JUNE')   
         ->day(11)
            ->item('Classes of Regular Summer Session begin')
         ->day(15)
            ->hilite_item('DEGREE APPLICATION DEADLINE', 'for September SB and Advanced Degrees. $40 Late Fee ($75 after July 13)')
      ->month('JULY')
         ->day(4) 
            ->item('Independence Day--Holiday')
         ->day(13)
            ->item('Last day to submit or change Adv. Degree Thesis Title.  $75 Late Fee')
      ->month('AUGUST')
         ->day(10)
            ->hilite_item('DEADLINE FOR DOCTORAL STUDENTS', 'to submit application, signed by department, to Graduate Students Office, 3-138, for Fall Term Non-Resident status ($100 Late Fee)')
            ->hilite_item('THESIS DUE', 'for ALL September degree candidates')
            ->item('Last day to petition for September Advanced Standing Exam')               
         ->day(16)
            ->hilite_item('5:00 P.M. CONTINUING STUDENT FINAL DEADLINE TO PRE-REG ON-LINE', '($75 Late Fee)')
         ->day(17)
            ->hilite_item('Last day to go off the September Degree List')
            ->item('Last day of classes for Regular Summer Session')
         ->day(20, 21)
            ->item('Summer Session Final Exam Period')
         ->day(26)
            ->item('Freshman Orientation begins')
         ->day(27)
            ->hilite_item('GRADES DUE', 'in Registrar\'s Office, 5-119, for Summer Session (12 noon)')
            ->item('Graduate Student Orientation activities begin')                        
        ->day(28) 
            ->item('English Evaluation Test for International students, 9 a.m.-12 noon')
        ->day(31)  
            ->item('Term Summaries of Summer Session Grades delivered to Departments')
            ->item('Some Postponed Finals and Advanced Standing Exams (other than freshmen)')
     ->month('SEPTEMBER')             
        ->day(3)
            ->item('Labor Day--Holiday')
        ->day(4)
            ->title_item('REGISTRATION DAY', 'Fall Term')
            ->item('DEADLINE', 'to change a Spring Term Exploratory subject to listener status')
        ->day(5)  
            ->hilite_item('FIRST DAY OF CLASSES')                                      ->day(7)
            ->hilite_item('DEGREE APPLICATION DEADLINE', 'for February SB and Advanced  Degrees')
            ->item('$40 Late Fee ($75 after December 14)')
            ->hilite_item('REGISTRATION DEADLINE.',  'Signed Registration forms for all students DUE in Student Services Center.  $40 Late Fee')
            ->hilite_item('DEADLINE FOR FINAL-TERM SENIORS', 'to submit the HASS Concentration Completion Form ($40 Late Fee)')
        ->day(10)   
            ->item('First quarter Physical Education classes begin')
        ->day(11)
            ->item('2:00 p.m. Graduate Academic Performance Meeting')
        ->day(14)
            ->item('1:00 p.m. C.A.P. September Degree Candidates Meeting')
        ->day(17, 21)
            ->item('Career Week')
        ->day(19)
            ->item('Faculty Officers recommend degrees to Corporation')
        ->day(20)
            ->item('11:00 a.m. - 6:00 p.m. Fall Career Fair')
        ->day(21)
            ->hilite_item('MINOR COMPLETION DATE.', 'Deadline for submission of Minor Completion form for final-term seniors. $40 Late Fee')
        ->day(24)
            ->item('Student Holiday -- no classes')
        ->day(26, 30)
            ->item('Physical Education Petition Revision Extension Period. Final-term seniors who will not complete the PE requirement bythe end of quarter one must update petition during this time ($40 Petition Processing Fee for updated petitions filed after this period)')
        ->day(28)
            ->item('Last day to sign up for family health insurance or waive individual coverage, E23-308')
     ->month('OCTOBER')
        ->day(1, 3)
            ->item('Physical Education Petition Revision Extension Period. Final-term seniors who will not complete the PE requirement bythe end of quarter one must update petition during this time ($40 Petition Processing Fee for updated petitions filed after this period)')
        ->day(5)
            ->hilite_item('ADD DATE.', 'Last day to add subjects to Registration')
            ->item('Last day for Jrs/Srs to change an Elective to or from P/D/F Grading')
            ->item('Last day to change a subject from Listener to Credit')
            ->item('Last day for Sophomores to change a subject to or from Exploratory') 
            ->item('Late fee ($100) and petition required for students completing registration after this date')
            ->item('Last day to petition for second S.B for June and next September degree candidates')
            ->item('Last day to drop half-term subjects offered in first half of term')
            ->item('Deadline for completing cross-registration.  $40 Late Fee for any petitions approved after this date')
	->day(8, 9)
            ->item('Columbus Day--Vacation')
        ->day(12, 14)
            ->item('Family Weekend')
        ->day(29)
            ->item('Second quarter Physical Education classes begin')
     ->month('NOVEMBER')
        ->day(12)  
            ->item('Veteran\'s Day--Holiday')
        ->day(21)
            ->hilite_item('DROP DATE.', 'Last day to cancel subjects from Registration')
            ->item('Last day to change a subject from Credit to Listener') 
            ->item('Last day  to add a time-arranged subject that started after beginning of the term') 
            ->item('Last day to Petition for Dec. Adv. Standing Exam (given during Final Exam Period)') 
            ->item('Last day to add half-term subjects offered in second half of term')
        ->day(22, 23)
            ->item('Thanksgiving Vacation')
     ->month('DECEMBER')
        ->day(3)
            ->hilite_item('ON-LINE PRE-REGISTRATION', 'for Spring Term and IAP begins')
        ->day(7)
            ->title_item('SUBJECTS WITH FINAL EXAM', 'no test may be given and no assignment, term paper or oral presentation shall fall due after this date')                                                 
            ->title_item('SUBJECTS WITH NO FINAL EXAM -- Undergraduate Subjects', 'no test may be given and at most one assignment may fall due between this date and the end of the 
last scheduled class period in the subject')
            ->title_item('SUBJECTS WITH NO FINAL EXAM -- Graduate Subjects', 'either one in-class test may be given or one assignment may fall due between this date and the end of the last regularly scheduled class in the subject')  
        ->day(12)
            ->hilite_item('LAST DAY OF CLASSES.') 
            ->item('Last day to drop half-term subjects offered in the second half of term')
        ->day(14)
            ->item('Last day to submit or change Adv. Degree Thesis Title. $75 Late Fee')
        ->day(17, 21)   
            ->hilite_item('FINAL EXAM PERIOD')
        ->day(18, 31)
            ->hilite_item('GRADE DEADLINE.',  'GRADES DUE in Registrar\'s Office, 5-119, according to DUE DATE indicated on the Grade Sheet.  Grade Sheets MUST BE SIGNED, ENCLOSED IN ENVELOPES, SEALED, AND DELIVERED to Registrar\'s Office on or before due date')
        ->day(27)
            ->hilite_item('SPRING PRE-REGISTRATION DEADLINE.',  'CONTINUING students must INITIATE on-line pre-registration by 5:00 p.m. on this date.  $40 Late Fee  ($75 after January 17)') 
   ->year(2008)
     ->month('JANUARY')              
        ->day(1, 2)
            ->hilite_item('GRADE DEADLINE.',  'GRADES DUE in Registrar\'s Office, 5-119, according to DUE DATE indicated on the Grade Sheet.  Grade Sheets MUST BE SIGNED, ENCLOSED IN ENVELOPES, SEALED, AND DELIVERED to Registrar\'s Office on or before due date')
        ->day(7)
            ->item('First Day of January Independent Activities Period')
            ->hilite_item('DEADLINE FOR DOCTORAL STUDENTS', 'to submit application, signed by department, to Graduate Students Office, 3-138, for Spring Term Non-Resident status. ($100 Late Fee).  Not needed if Spring Term approved with Fall Term application')
        ->day(8) 
            ->item('Term Summaries of Fall Term Grades delivered to Departments')
        ->day(9) 
            ->item('1:00 p.m. First-Year Grades Meeting')
        ->day(10) 
            ->item('9:00 a.m. Second-Year and Third-Year Grades Meeting')
        ->day(11) 
            ->hilite_item('THESIS DUE', 'for doctoral degrees')
            ->item('Last day to Petition for January Advanced Standing Exam')
            ->item('9:00 a.m. Fourth-Year Grades Meeting')                  
        ->day(17) 
            ->hilite_item('5:00 P.M. FINAL DEADLINE FOR CONTINUING STUDENTS TO PRE-REG ON-LINE', '($75 Late Fee)')
        ->day(18) 
            ->hilite_item('THESIS DUE', 'for degrees other than doctoral')
            ->item('Last day to go off the February Degree List')
        ->day(21)
            ->item('Martin Luther King, Jr. Day--Holiday')
        ->day(22)
            ->item('2:00 p.m. Graduate Academic Performance Meeting')
        ->day(23)
            ->item('9:00 a.m. C.A.P. deferred action meeting')
        ->day(24) 
            ->item('9:00 a.m. C.A.P. deferred action meeting')
        ->day(30)
            ->item('English Evaluation Test for International students, 9 a.m. - 12 noon')
        ->day(30, 31) 
            ->item('Some Advanced Standing Exams and Postponed Finals')
     ->month('FEBRUARY')              
        ->day(1) 
            ->item('Some Advanced Standing Exams and Postponed Finals')
            ->item('Last day of January Independent Activities Period')
        ->day(4) 
            ->title_item('REGISTRATION DAY', 'Spring Term')
            ->hilite_item('DEADLINE', 'to change a Fall Term Exploratory subject to listener status')
        ->day(5) 
            ->hilite_item('FIRST DAY OF CLASSES')
        ->day(6)
            ->hilite_item('GRADES DUE', 'in Registrar\'s Office, 5-119, for work completed in IAP')
        ->day(8)
            ->hilite_item('REGISTRATION DEADLINE.', 'Signed Registration forms for all students DUE in Student Services Center.  $40 Late Fee')
            ->hilite_item('DEGREE APPLICATION DEADLINE', 'for June SB and Advanced Degrees. $40 Late Fee ($75 Late Fee after April 4)')
            ->hilite_item('DEADLINE FOR FINAL-TERM SENIORS', 'to: submit the HASS Concentration Completion Form ($40 Late Fee)')
            ->item('Final Deadline for all Juniors to submit HASS Concentration Proposal Form')
        ->day(11)
            ->item('Term Summaries of Grades for IAP delivered to Departments')
            ->item('Third quarter Physical Education classes begin')
        ->day(12)
            ->item('2:00 p.m. Graduate Academic Performance Meeting')
        ->day(15)
            ->item('1:00 p.m. C.A.P. February Degree Candidates Meeting')
        ->day(18)
            ->item('Presidents Day--Holiday')
        ->day(19)
            ->hilite_item('MONDAY SCHEDULE OF CLASSES TO BE HELD')
        ->day(20) 
            ->item('Faculty Officers recommend degrees to Corporation')
        ->day(20, 27)
            ->item('Physical Education Petition Revision Extension Period. Final-term seniors who will not complete the PE requirement by the end of quarter three must update petition during this time ($40 Petition Processing Fee for updated petitions filed after this period)')
        ->day(22)
            ->hilite_item('MINOR COMPLETION DATE.',  'Deadline for submission of Minor Completion form for final-term seniors.  $40 Late Fee')
        ->day(29)
            ->item('Last day to sign up for family health insurance or waive individual coverage, E23-308') 
     ->month('MARCH')
        ->day(7)
            ->hilite_item('ADD DATE.',  'Last day to add subjects to Registration')
            ->item('Last day for Jrs/Srs to change an Elective to or from P/D/F Grading')
            ->item('Last day to change a subject from Listener to Credit')
            ->item('Last day for Sophomores to change a subject to or from Exploratory')
            ->item('Late fee ($100) and petition required for students completing registration after this date')
            ->item('Last day to petition for second S.B for next February degree candidates')
            ->item('Last day to drop half-term subjects offered in first half of term')
            ->item('Deadline for completing cross-registration.  $40 Late Fee for petitions approved after this date')
        ->day(24, 28)
            ->item('Spring Vacation')
     ->month('APRIL')              
        ->day(2) 
            ->item('Fourth quarter Physical Education classes begin')
        ->day(4)
            ->item('Last day to submit or change Adv. Degree Thesis Title ($75 Late Fee)')
        ->day(10, 13)
            ->item('Campus Preview Weekend')
        ->day(21, 22)
            ->item('Patriots Day--Vacation')
        ->day(24)
           ->hilite_item('DROP DATE.',  'Last day to cancel subjects from Registration')
           ->item('Last day to change a subject from Credit to Listener')
           ->item('Last day to add time-arranged subject that started after beginning of the term')
           ->item('Last day to Petition for May Adv. Standing Exam (given during Final Exam Period)')
           ->item('Last day to add half-term subjects offered in second half of term')
     ->month('MAY')            
        ->day(1)
            ->hilite_item('ON-LINE PRE-REGISTRATION', 'for Fall Term and Summer Session begins')
        ->day(2)
            ->hilite_item('THESIS DUE', 'for doctoral degrees')
        ->day(9)
            ->title_item('SUBJECTS WITH FINAL EXAM', 'no test may be given and no assignment, term paper or oral presentation shall fall due after this date')
            ->title_item('SUBJECTS WITH NO FINAL EXAM -- Undergraduate Subjects', 'no test may be given and at most one assignment may fall due between this date and the end of the last scheduled class period in the subject')
            ->title_item('SUBJECTS WITH NO FINAL EXAM -- Graduate Subjects', 'either one in-class test may be given or one assignment may fall due between this date and the end of the last regularly scheduled class in the subject')
            ->hilite_item('THESIS DUE', 'for degrees other than doctoral')
        ->day(15)
            ->hilite_item('LAST DAY OF CLASSES')
            ->item('Last day to drop half-term subjects offered in the second half of term')
        ->day(19, 23)
            ->hilite_item('FINAL EXAM WEEK')
        ->day(20, 28)
            ->hilite_item('GRADE DEADLINE.', 'GRADES DUE in Registrar\'s Office, 5-119,  according to DUE DATE indicated on the Grade Sheet. Grade Sheets MUST BE SIGNED, ENCLOSED IN ENVELOPES, SEALED, AND DELIVERED to Registrar\'s Office on or before due date')
        ->day(23)
            ->item('LAST DAY TO GO OFF THE JUNE DEGREE LIST')
        ->day(26)
            ->item('Memorial Day--Holiday')
        ->day(29)
            ->hilite_item('FALL PRE-REGISTRATION DEADLINE.', 'CONTINUING students must initiate on-line pre-registration by this date.  $40 Late Fee. ($75 after August 14)')
            ->hilite_item('SUMMER SESSION PRE-REGISTRATION DEADLINE', 'Deadline for all students to pre-register on-line for Summer Session. $40 Late Fee')         
        ->day(30)
            ->item('8:00 a.m. Term Summaries of Spring Term Grades delivered to Departments')
            ->hilite_item('DEPARTMENT GRADES MEETINGS')
     ->month('JUNE')
        ->day(2)
            ->item('10:00 a.m. Fourth-Year Grades Meeting')
            ->item('1:00 p.m. Graduate Academic Performance Meeting')
            ->item('Faculty Officers recommend degrees to Corporation')
        ->day(3)
            ->item('9:00 a.m. Second-Year and Third-Year Grades Meeting')
        ->day(4)
            ->item('Wednesday   1:00 p.m. First-Year Grades Meeting')
        ->day(5)
            ->item('Doctoral Hooding Ceremony')
        ->day(6)
            ->hilite_item('COMMENCEMENT')
        ->day(9)
            ->item('Classes of Regular Summer Session begin')
        ->day(13)
            ->hilite_item('DEGREE APPLICATION', 'DEADLINE for September SB and Advanced Degrees Fee ($75 after July 11)')
        ->day(17)
            ->item('9:00 a.m. C.A.P. deferred action meeting')
        ->day(18)
            ->item('9:00 a.m. C.A.P. deferred action meeting')
     ->month('JULY')
        ->day(4)
            ->item('Independence Day--Holiday')
        ->day(11)
            ->item('Last day to submit Adv. Degree Thesis Title.  $75 Late Fee')
     ->month('AUGUST')
        ->day(8)
            ->hilite_item('DEADLINE FOR DOCTORAL STUDENTS', 'to submit application, signed by department, to Graduate Students Office, 3-138, for Fall Term Non-Resident status ($100 Late Fee)')
            ->hilite_item('THESIS DUE', 'for ALL September degree candidates. Last day to petition for September Advanced Standing Exam')
        ->day(14)
            ->hilite_item('5:00 P.M. CONTINUING STUDENT FINAL DEADLINE TO PRE-REG ON-LINE', '($75 Late Fee)')
        ->day(15)
            ->hilite_item('LAST DAY TO GO OFF THE SEPTEMBER DEGREE LIST')
            ->item('Last day of classes for Regular Summer Session')
        ->day(18, 19)
            ->item('Summer Session Final Exam Period')
        ->day(24)
            ->item('Freshman Orientation begins')
        ->day(25)
            ->hilite_item('GRADES DUE', 'in Registrar\'s Office, 5-119, for Summer Session (12 noon)')
            ->item('Graduate Student Orientation activities begin')
        ->day(26)
            ->item('English Evaluation Test for International students, 9 a.m.-12 noon')
        ->day(29)
            ->item('Term Summaries of Summer Session Grades delivered to Departments')
            ->item('Some Postponed Finals and Advanced Standing Exams (other than freshmen)')
     ->month('SEPTEMBER')              
        ->day(1)
            ->item('Labor Day--Holiday')
        ->day(2)
            ->title_item('REGISTRATION DAY', 'Fall Term')
            ->hilite_item('DEADLINE', 'to change a Spring Term Exploratory subject to listener status')
        ->day(3)
            ->hilite_item('FIRST DAY OF CLASSES')
        ->day(5)
            ->hilite_item('DEGREE APPLICATION DEADLINE', 'for February SB and Advanced  Degrees. $40 Late Fee ($75 after December 12)')
            ->hilite_item('REGISTRATION DEADLINE.',  'Signed Registration forms for all students DUE in Student Services Center.  $40 Late Fee')
            ->hilite_item('DEADLINE FOR FINAL-TERM SENIORS', 'to submit the HASS Concentration Completion Form ($40 Late Fee)')
        ->day(8)
            ->item('First quarter Physical Education classes begin')
        ->day(9)
            ->item('2:00 p.m. Graduate Academic Performance Meeting')
        ->day(12)
            ->item('1:00 p.m. C.A.P. September Degree Candidates Meeting')
        ->day(15, 19)
            ->item('Career Week')
        ->day(17)
            ->item('Faculty Officers recommend degrees to Corporation')
        ->day(18)
            ->item('11:00 a.m. - 6:00 p.m. Fall Career Fair')
        ->day(19)
            ->item('MINOR COMPLETION DATE.', 'Deadline for submission of Minor Completion form for final-term seniors. $40 Late Fee')
        ->day(22)
            ->item('Student Holiday -- no classes')
        ->day(24, 30)
            ->item('Physical Education Petition Revision Extension Period. Final-term seniors who will not complete the PE requirement by the end of quarter one must update petition during this time')
        ->day(30)
           ->item('Last day to sign up for family health insurance or waive individual coverage, E23-308') 
     ->month('OCTOBER')              
        ->day(1)
            ->item('Physical Education Petition Revision Extension Period. Final-term seniors who will not complete the PE requirement by the end of quarter one must update petition during this time')
        ->day(3)
            ->hilite_item('ADD DATE.', 'Last day to add subjects to Registration')
            ->item('Last day for Jrs/Srs to change an Elective to or from P/D/F Grading')
            ->item('Last day to change a subject from Listener to Credit')
            ->item('Last day for Sophomores to change a subject to or from Exploratory')
            ->item('Late fee ($100) and petition required for students completing registration after this date')
            ->item('Last day to petition for second S.B for June and next September degree candidates')
            ->item('Last day to drop half-term subjects offered in first half of term')
            ->item('Deadline for completing cross-registration.  $40 Late Fee for petitions approved after this date')
        ->day(13)
            ->item('Columbus Day--Holiday')
        ->day(17, 19)
            ->item('Family Weekend')
        ->day(27)
            ->item('Second quarter Physical Education classes begin')
     ->month('NOVEMBER')       
        ->day(10, 11)
            ->item('Veteran\'s Day--Vacation')
        ->day(19)
            ->hilite_item('DROP DATE.', 'Last day to cancel subjects from Registration')
            ->item('Last day to change a subject from Credit to Listener')
            ->item('Last day to add a time-arranged subject that started after beginning of the term')
            ->item('Last day to Petition for Dec. Adv. Standing Exam (given during Final Exam Period)')
            ->item('Last day to add half-term subjects offered in second half of term')
        ->day(27, 28)
            ->item('Thanksgiving Vacation')
     ->month('DECEMBER')              
        ->day(1)
            ->hilite_item('ON-LINE PRE-REGISTRATION', 'for Spring Term and IAP begins')
        ->day(5)
            ->title_item('SUBJECTS WITH FINAL EXAM', 'no test may be given and no assignment, term paper or oral presentation shall fall due after this date')
            ->title_item('SUBJECTS WITH NO FINAL EXAM -- Undergraduate Subjects', 'no test may be given and at most one assignment may fall due between this date and the end of the last scheduled class period in the subject')
            ->title_item('SUBJECTS WITH NO FINAL EXAM -- Graduate Subjects', 'either one in-class test may be given or one assignment may fall due between this date and the end of the last regularly scheduled class in the subject')
        ->day(10)
            ->hilite_item('LAST DAY OF CLASSES') 
            ->item('Last day to drop half-term subjects offered in the second half of term')
        ->day(12)
            ->item('Last day to submit Adv. Degree Thesis Title. $75 Late Fee')
        ->day(15, 19)
            ->hilite_item('FINAL EXAM PERIOD')
        ->day(16, 31) 
            ->hilite_item('GRADE DEADLINE.',  'GRADES DUE in Registrar\'s Office, 5-119, according to DUE DATE indicated on the Grade Sheet.  Grade Sheets MUST BE SIGNED, ENCLOSED IN ENVELOPES, SEALED, AND DELIVERED to Registrar\'s Office on or before due date') 
        ->day(30)
            ->hilite_item('SPRING PRE-REGISTRATION DEADLINE.',  'CONTINUING students must INITIATE on-line pre-registration by 5:00 p.m. on this date.  $40 Late Fee  ($75 after January 15)')
   ->year(2009)
     ->month('JANUARY')              
        ->day(5)
            ->item('First Day of January Independent Activities Period')
            ->item('DEADLINE FOR DOCTORAL STUDENTS', 'to submit application, signed by department, to Graduate Students Office, 3-138, for Spring Term Non-Resident status. ($100 Late Fee).  Not needed if Spring Term approved with Fall Term application')
        ->day(6)
            ->item('Term Summaries of Fall Term Grades delivered to Departments')
        ->day(7)
            ->item('1:00 p.m. First-Year Grades Meeting')
        ->day(8)
            ->item('9:00 a.m. Second-Year and Third-Year Grades Meeting')
        ->day(9)
            ->hilite_item('THESIS DUE', 'for doctoral degrees')
            ->item('Last day to Petition for January Advanced Standing Exam')                                                ->item('9:00 a.m. Fourth-Year Grades Meeting')   
        ->day(13)
            ->item('2:00 p.m. Graduate Academic Performance Meeting')              
        ->day(15)
            ->item('5:00 P.M. FINAL DEADLINE FOR CONTINUING STUDENTS TO PRE-REG ON-LINE', '($75 Late Fee)')
        ->day(16)
            ->item('THESIS DUE', 'for degrees other than doctoral')                        
            ->hilite_item('LAST DAY TO GO OFF THE FEBRUARY DEGREE LIST')
        ->day(19)
            ->item('Martin Luther King, Jr. Day--Holiday')
        ->day(21)
            ->item('9:00 a.m. C.A.P. Deferred Action meeting')
        ->day(22)
            ->item('9:00 a.m.  C.A.P. Deferred Action meeting')
        ->day(28)
            ->item('English Evaluation Test for International students, 9 a.m. - 12 noon')
        ->day(28, 30) 
            ->item('Some Advanced Standing Exams and Postponed Finals')
        ->day(30)
            ->item('Last day of January Independent Activities Period')
     ->month('FEBRUARY')              
        ->day(2)
            ->title_item('REGISTRATION DAY', 'Spring Term')
            ->hilite_item('DEADLINE', 'to change a Fall Term Exploratory subject to listener status')
        ->day(3) 
            ->hilite_item('FIRST DAY OF CLASSES')
        ->day(4)
            ->hilite_item('GRADES DUE', 'in Registrar\'s Office, 5-119, for work completed in IAP')
        ->day(6)
            ->hilite_item('REGISTRATION DEADLINE.',  'Signed Registration forms for all students DUE in Student Services Center.  $40 Late Fee')
            ->hilite_item('DEGREE APPLICATION DEADLINE', 'for June SB and Advanced Degrees. $40 Late Fee ($75 Late Fee after April 3)')
            ->hilite_item('DEADLINE FOR FINAL-TERM SENIORS', 'to: submit the HASS Concentration Completion Form ($40 Late Fee)')
            ->item('Final Deadline for all Juniors to submit HASS Concentration Proposal Form')
        ->day(9)
            ->item('Term Summaries of Grades for IAP delivered to Departments')
            ->item('Third quarter Physical Education classes begin')
        ->day(10)
            ->item('2:00 p.m. Graduate Academic Performance Meeting')
        ->day(13)
            ->item('1:00 p.m. C.A.P. February Degree Candidates Meeting')
        ->day(16)
            ->item('Presidents Day--Holiday')
        ->day(17)
            ->hilite_item('MONDAY SCHEDULE OF CLASSES TO BE HELD')
        ->day(18)
            ->item('Faculty Officers recommend degrees to Corporation')
        ->day(18, 25)
            ->item('Physical Education Petition Revision Extension Period. Final-term seniors who will not complete the PE requirement by the end of quarter three must update petition during this time')
        ->day(20)
            ->hilite_item('MINOR COMPLETION DATE.', 'Deadline for submission of Minor Completion form for final-term seniors.  $40 Late Fee')
        ->day(27)
            ->item('Last day to sign up for family health insurance or waive individual coverage, E23-308') 
     ->month('MARCH')              
        ->day(6)
            ->hilite_item('ADD DATE.', 'Last day to add subjects to Registration')
            ->item('Last day for Jrs/Srs to change an Elective to or from P/D/F Grading')
            ->item('Last day for Graduate students to change a subject to or from P/D/F Grading')
            ->item('Last day to change a subject from Listener to Credit')
            ->item('Last day for Sophomores to change a subject to or from Exploratory')
            ->item('Late fee ($100) and petition required for students completing registration after this date')
            ->item('Last day to petition for second S.B for next February degree candidates')
            ->item('Last day to drop half-term subjects offered in first half of term')
            ->item('Deadline for completing cross-registration.  $40 Late Fee for petitions approved after this date')
        ->day(23, 27)
            ->item('Spring Vacation')
     ->month('APRIL')
        ->day(1)
            ->item('Fourth quarter Physical Education classes begin') 
        ->day(3)
            ->item('Last day to submit Adv. Degree Thesis Title ($75 Late Fee)')
        ->day(16, 19)
            ->item('Campus Preview Weekend')                                                       
        ->day(20, 21)
            ->item('Patriots Day--Vacation')
        ->day(23)
            ->hilite_item('DROP DATE', 'Last day to cancel subjects from Registration')
            ->item('Last day to change a subject from Credit to Listener')
	    ->item('Last day to add time-arranged subject that started after beginning of the term')
            ->item('Last day to Petition for May Adv. Standing Exam (given during Final Exam Period)')
            ->item('Last day to add half-term subjects offered in second half of term')
     ->month('MAY')
        ->day(1)
            ->hilite_item('THESIS DUE', 'for doctoral degrees')
            ->hilite_item('PRE-REGISTRATION', 'for Fall Term and Summer Session begins')
        ->day(8)
            ->title_item('SUBJECTS WITH FINAL EXAM', 'no test may be given and no assignment, term paper or oral presentation shall fall due after this date')
            ->title_item('SUBJECTS WITH NO FINAL EXAM -- Undergraduate Subjects', 'no test may be given and at most one assignment may fall due between this date and the end of the last scheduled class period in the subject') 
            ->title_item('SUBJECTS WITH NO FINAL EXAM -- Graduate Subjects', 'either one in-class test may be given or one assignment may fall due between this date and the end of the last regularly scheduled class in the subject')
            ->hilite_item('THESIS DUE', 'for degrees other than doctoral')
        ->day(14)
            ->hilite_item('LAST DAY OF CLASSES')
            ->item('Last day to drop half-term subjects offered in the second half of term')
        ->day(18, 22)
            ->hilite_item('FINAL EXAM WEEK')
        ->day(19, 27)
            ->hilite_item('GRADE DEADLINE.', 'GRADES DUE in Registrar\'s Office, 5-119,  according to DUE DATE indicated on the Grade Sheet.  Grade Sheets MUST BE SIGNED, ENCLOSED IN ENVELOPES, SEALED, AND DELIVERED to Registrar\'s Office on or before due date')
        ->day(22)
            ->item('LAST DAY TO GO OFF THE JUNE DEGREE LIST')
        ->day(25)
            ->item('Memorial Day--Holiday')
        ->day(28)
            ->hilite_item('FALL PRE-REGISTRATION DEADLINE.', 'CONTINUING students must initiate on-line pre-registration by this date.  $40 Late Fee. ($75 after August 20)')
            ->hilite_item('SUMMER SESSION PRE-REGISTRATION DEADLINE.', 'Deadline for all students to pre-register on-line for Summer Session. $40 Late Fee')
        ->day(29)
            ->item('8:00 a.m. Term Summaries of Spring Term Grades delivered to Departments')
            ->hilite_item('DEPARTMENT GRADES MEETINGS')
     ->month('JUNE')              
        ->day(1)
            ->item('10:00 a.m. Fourth-Year Grades Meeting')
            ->item('1:00 p.m. Graduate Academic Performance Meeting')
            ->item('Faculty Officers recommend degrees to Corporation')
        ->day(2)
            ->item('9:00 a.m. Second-Year and Third-Year Grades Meeting')
        ->day(3)
            ->item('1:00 p.m. First-Year Grades Meeting')
        ->day(4)
            ->item('Doctoral Hooding Ceremony')
        ->day(5)
            ->hilite_item('COMMENCEMENT')
        ->day(16)
            ->item('9:00 a.m. C.A.P. Deferred Action meeting')
        ->day(17)
            ->item('9:00 a.m. C.A.P. Deferred Action meeting')
?>