#tag Window
Begin Window winMain
   BackColor       =   &cFFFFFF00
   Backdrop        =   0
   CloseButton     =   True
   Compatibility   =   ""
   Composite       =   False
   Frame           =   0
   FullScreen      =   False
   FullScreenButton=   False
   HasBackColor    =   False
   Height          =   600
   ImplicitInstance=   True
   LiveResize      =   True
   MacProcID       =   0
   MaxHeight       =   32000
   MaximizeButton  =   True
   MaxWidth        =   32000
   MenuBar         =   1604950015
   MenuBarVisible  =   True
   MinHeight       =   64
   MinimizeButton  =   True
   MinWidth        =   64
   Placement       =   0
   Resizeable      =   True
   Title           =   "หน้าจอหลัก"
   Visible         =   True
   Width           =   1280
   Begin Label Label2
      AutoDeactivate  =   True
      Bold            =   False
      DataField       =   ""
      DataSource      =   ""
      Enabled         =   True
      Height          =   20
      HelpTag         =   ""
      Index           =   -2147483648
      InitialParent   =   ""
      Italic          =   False
      Left            =   20
      LockBottom      =   False
      LockedInPosition=   False
      LockLeft        =   True
      LockRight       =   False
      LockTop         =   True
      Multiline       =   False
      Scope           =   0
      Selectable      =   False
      TabIndex        =   8
      TabPanelIndex   =   0
      TabStop         =   True
      Text            =   "กรุณาเลือกรายวิชา"
      TextAlign       =   0
      TextColor       =   &c00000000
      TextFont        =   "System"
      TextSize        =   0.0
      TextUnit        =   0
      Top             =   20
      Transparent     =   True
      Underline       =   False
      Visible         =   True
      Width           =   193
   End
   Begin Listbox DataList
      AutoDeactivate  =   True
      AutoHideScrollbars=   True
      Bold            =   False
      Border          =   True
      ColumnCount     =   10
      ColumnsResizable=   True
      ColumnWidths    =   "5%,*,8%,8%,8%,8%,*,8%,*,8%"
      DataField       =   ""
      DataSource      =   ""
      DefaultRowHeight=   -1
      Enabled         =   True
      EnableDrag      =   False
      EnableDragReorder=   False
      GridLinesHorizontal=   2
      GridLinesVertical=   2
      HasHeading      =   True
      HeadingIndex    =   -1
      Height          =   528
      HelpTag         =   ""
      Hierarchical    =   False
      Index           =   -2147483648
      InitialParent   =   ""
      InitialValue    =   "ลำดับ	หลักสูตร	รหัส รจภ	รหัส EN รจภ	รหัสเทียบ	รหัสเทียบ  EN	ชื่อวิชา	หน่วยกิต	มหาวิทยาลัย	หมายเหตุ"
      Italic          =   False
      Left            =   20
      LockBottom      =   True
      LockedInPosition=   False
      LockLeft        =   True
      LockRight       =   True
      LockTop         =   True
      RequiresSelection=   False
      Scope           =   0
      ScrollbarHorizontal=   False
      ScrollBarVertical=   True
      SelectionType   =   0
      ShowDropIndicator=   False
      TabIndex        =   9
      TabPanelIndex   =   0
      TabStop         =   True
      TextFont        =   "System"
      TextSize        =   0.0
      TextUnit        =   0
      Top             =   52
      Underline       =   False
      UseFocusRing    =   True
      Visible         =   True
      Width           =   1240
      _ScrollOffset   =   0
      _ScrollWidth    =   -1
   End
   Begin CheckBox AlternateHighlightCheckBox
      AutoDeactivate  =   True
      Bold            =   False
      Caption         =   "Use alternate row highlighting"
      DataField       =   ""
      DataSource      =   ""
      Enabled         =   True
      Height          =   20
      HelpTag         =   ""
      Index           =   -2147483648
      InitialParent   =   ""
      Italic          =   False
      Left            =   1037
      LockBottom      =   False
      LockedInPosition=   False
      LockLeft        =   True
      LockRight       =   False
      LockTop         =   True
      Scope           =   0
      State           =   1
      TabIndex        =   10
      TabPanelIndex   =   0
      TabStop         =   True
      TextFont        =   "System"
      TextSize        =   0.0
      TextUnit        =   0
      Top             =   20
      Underline       =   False
      Value           =   True
      Visible         =   False
      Width           =   223
   End
End
#tag EndWindow

#tag WindowCode
	#tag Event
		Sub Close()
		  Quit
		End Sub
	#tag EndEvent

	#tag Event
		Function KeyDown(Key As String) As Boolean
		  // Press the esc Key to close this window
		  If Key = Chr(27) Then
		    Dim d As New MessageDialog                  //declare the MessageDialog object
		    Dim b As MessageDialogButton                //for handling the result
		    d.icon=MessageDialog.GraphicCaution         //display warning icon
		    d.ActionButton.Caption="ออกจากโปรแกรม"
		    d.CancelButton.Visible=True                 //show the Cancel button
		    d.CancelButton.Caption="ยกเลิก"
		    d.Message="คุณต้องการปิดโปรแกรมนี้?"
		    d.Explanation="ถ้าปิดโปรแกรมตอนนี้ กรุณาตรวจสอบว่าข้อมูลในแต่ละหน้าจอได้รับการบันทึกไว้เรียบร้อยแล้ว"
		    
		    b=d.ShowModal                              //display the dialog
		    Select Case b                              //determine which button was pressed.
		    Case d.ActionButton
		      //user pressed Save
		      Quit
		    Case d.CancelButton
		      //user pressed Cancel
		    End Select
		  End If
		End Function
	#tag EndEvent


	#tag Method, Flags = &h0
		Function IsConnected() As Boolean
		  If App.mDB Is Nil Then
		    App.mIsConnected = False
		  End If
		  
		  Return App.mIsConnected
		End Function
	#tag EndMethod

	#tag Method, Flags = &h0
		Sub OpenWinGradeTransferAction(rule_id As String)
		  Dim wingrade As New winGradeTrasferAction(rule_id)
		  
		  wingrade.Visible = True
		End Sub
	#tag EndMethod

	#tag Method, Flags = &h0
		Sub RefreshDataList()
		  If Not IsConnected Then
		    MsgBox("Connect to the database first.")
		    Return
		  End If
		  
		  DataList.DeleteAllRows
		  
		  Dim sql As String
		  sql = "Select `sameas_rules`.`sameas_id` , `sameas_rules`.`program` , `sameas_rules`.`subj_id_th` , `sameas_rules`.`subj_id_en` , `sameas_rules`.`comp_subj_id_th` , `sameas_rules`.`comp_subj_id_en` , `sameas_rules`.`subj_name` , `sameas_rules`.`credit` , `sameas_rules`.`comp_university` , `sameas_rules`.`remark` FROM `sameas_rules` ORDER BY `sameas_rules`.`subj_id_th` Asc"
		  
		  Dim data As RecordSet
		  App.mDB.SQLExecute "SET NAMES 'utf8'"
		  data = App.mDB.SQLSelect(sql)
		  
		  If App.mDB.Error Then
		    MsgBox("DB Error: " + App.mDB.ErrorMessage)
		    Return
		  End If
		  
		  If data <> Nil Then
		    While Not data.EOF
		      DataList.AddRow(_
		      data.IdxField(1).StringValue.DefineEncoding(Encodings.UTF8), data.IdxField(2).StringValue.DefineEncoding(Encodings.UTF8), _
		      data.IdxField(3).StringValue.DefineEncoding(Encodings.UTF8), data.IdxField(4).StringValue.DefineEncoding(Encodings.UTF8), _
		      data.IdxField(5).StringValue.DefineEncoding(Encodings.UTF8), data.IdxField(6).StringValue.DefineEncoding(Encodings.UTF8), _
		      data.IdxField(7).StringValue.DefineEncoding(Encodings.UTF8), data.IdxField(8).StringValue.DefineEncoding(Encodings.UTF8), _
		      data.IdxField(9).StringValue.DefineEncoding(Encodings.UTF8), data.IdxField(10).StringValue.DefineEncoding(Encodings.UTF8)_
		      )
		      data.MoveNext
		    Wend
		    data.Close
		  End If
		End Sub
	#tag EndMethod


#tag EndWindowCode

#tag Events DataList
	#tag Event
		Sub Open()
		  RefreshDataList
		End Sub
	#tag EndEvent
	#tag Event
		Sub DoubleClick()
		  Dim row As Integer
		  Dim rule_id As String
		  row = Me.ListIndex
		  rule_id = Me.Cell(Me.ListIndex,0)
		  // MsgBox("RowTag = " + Str(row) + " selected " + Me.Cell(Me.ListIndex,0))
		  
		  OpenWinGradeTransferAction(rule_id)
		End Sub
	#tag EndEvent
	#tag Event
		Function CellBackgroundPaint(g As Graphics, row As Integer, column As Integer) As Boolean
		  // Highlight ever other row
		  
		  If row Mod 2 = 0 And AlternateHighlightCheckBox.Value Then
		    g.ForeColor = &cf3f6fA
		    g.FillRect(0, 0, g.Width, g.Height)
		  End If
		End Function
	#tag EndEvent
#tag EndEvents
#tag Events AlternateHighlightCheckBox
	#tag Event
		Sub Action()
		  #If TargetWin32 Then
		    For row As Integer = 0 To DataList.ListCount-1
		      For col As Integer = 0 To DataList.ColumnCount-1
		        DataList.InvalidateCell(row, col)
		      Next
		    Next
		    
		  #Else
		    // Redraw ListBox so that background are painted using the current value of the CheckBox
		    DataList.Invalidate(False)
		    // HierarchicalListBox.Invalidate(False)
		  #Endif
		  
		End Sub
	#tag EndEvent
#tag EndEvents
#tag ViewBehavior
	#tag ViewProperty
		Name="BackColor"
		Visible=true
		Group="Background"
		InitialValue="&hFFFFFF"
		Type="Color"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Backdrop"
		Visible=true
		Group="Background"
		Type="Picture"
		EditorType="Picture"
	#tag EndViewProperty
	#tag ViewProperty
		Name="CloseButton"
		Visible=true
		Group="Frame"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Composite"
		Group="OS X (Carbon)"
		InitialValue="False"
		Type="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Frame"
		Visible=true
		Group="Frame"
		InitialValue="0"
		Type="Integer"
		EditorType="Enum"
		#tag EnumValues
			"0 - Document"
			"1 - Movable Modal"
			"2 - Modal Dialog"
			"3 - Floating Window"
			"4 - Plain Box"
			"5 - Shadowed Box"
			"6 - Rounded Window"
			"7 - Global Floating Window"
			"8 - Sheet Window"
			"9 - Metal Window"
			"11 - Modeless Dialog"
		#tag EndEnumValues
	#tag EndViewProperty
	#tag ViewProperty
		Name="FullScreen"
		Group="Behavior"
		InitialValue="False"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="FullScreenButton"
		Visible=true
		Group="Frame"
		InitialValue="False"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="HasBackColor"
		Visible=true
		Group="Background"
		InitialValue="False"
		Type="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Height"
		Visible=true
		Group="Size"
		InitialValue="400"
		Type="Integer"
	#tag EndViewProperty
	#tag ViewProperty
		Name="ImplicitInstance"
		Visible=true
		Group="Behavior"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Interfaces"
		Visible=true
		Group="ID"
		Type="String"
		EditorType="String"
	#tag EndViewProperty
	#tag ViewProperty
		Name="LiveResize"
		Visible=true
		Group="Behavior"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MacProcID"
		Group="OS X (Carbon)"
		InitialValue="0"
		Type="Integer"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MaxHeight"
		Visible=true
		Group="Size"
		InitialValue="32000"
		Type="Integer"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MaximizeButton"
		Visible=true
		Group="Frame"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MaxWidth"
		Visible=true
		Group="Size"
		InitialValue="32000"
		Type="Integer"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MenuBar"
		Visible=true
		Group="Menus"
		Type="MenuBar"
		EditorType="MenuBar"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MenuBarVisible"
		Visible=true
		Group="Deprecated"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MinHeight"
		Visible=true
		Group="Size"
		InitialValue="64"
		Type="Integer"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MinimizeButton"
		Visible=true
		Group="Frame"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MinWidth"
		Visible=true
		Group="Size"
		InitialValue="64"
		Type="Integer"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Name"
		Visible=true
		Group="ID"
		Type="String"
		EditorType="String"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Placement"
		Visible=true
		Group="Behavior"
		InitialValue="0"
		Type="Integer"
		EditorType="Enum"
		#tag EnumValues
			"0 - Default"
			"1 - Parent Window"
			"2 - Main Screen"
			"3 - Parent Window Screen"
			"4 - Stagger"
		#tag EndEnumValues
	#tag EndViewProperty
	#tag ViewProperty
		Name="Resizeable"
		Visible=true
		Group="Frame"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Super"
		Visible=true
		Group="ID"
		Type="String"
		EditorType="String"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Title"
		Visible=true
		Group="Frame"
		InitialValue="Untitled"
		Type="String"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Visible"
		Visible=true
		Group="Behavior"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Width"
		Visible=true
		Group="Size"
		InitialValue="600"
		Type="Integer"
	#tag EndViewProperty
#tag EndViewBehavior